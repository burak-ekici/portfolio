<?php
     
       
     function dbConnect()
    {
        try{
            $db = new PDO('mysql:host=home.3wa.io:3307;dbname=live-34_roxxstar69_projet-Final;charset=UTF8',
                  'roxxstar69', '9652b36aZjM3M2M4Mjc3MGFhYmFmOWI1OWRlOTEx4837b898',[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        
        return $db;}
        catch(Exception $e)
        {
        die('Erreur : '.$e->getMessage());
        }
     };
     
     function addVideo($titre,$link,$numero)
     {
         $db = dbConnect();
         $req= $db->prepare("INSERT INTO videos (titre , lien , numero) VALUES( ?  , ? , ?)");
         $numExist = getPost($numero);
         
         if($numExist == false){ 
             
                  $req->execute([
                              $titre,
                              $link,
                              $numero,
                              
                  ]);
                  
         } 
     };
     
     function getPosts()
    {
        $db = dbConnect();
        $req = $db->query('SELECT * FROM videos ORDER BY numero');
        $videos = $req->fetchAll();
        return $videos;
    };
    function getPost($id)
    {
        $db = dbConnect();
        $idClean = strip_tags($id);
        $req = $db->prepare('SELECT * FROM videos WHERE numero = ? ');
        $req->execute([
                      $idClean
          ]);
        $video = $req->fetch();
        return $video;
    }
    
    function deleteVideo($id)
    {
        $db = dbConnect();
        $idClean = strip_tags($id);
        $req= $db->prepare('DELETE FROM videos WHERE numero = ?');
        $req->execute([
                        $idClean
        ]);
    };
    
    function editVideo($titre,$link,$numero,$id)
    {
         $db = dbConnect();
         $idClean = strip_tags($id);
         $req= $db->prepare("UPDATE videos SET titre = ? , lien = ? , numero = ? WHERE numero = ? ");
         $numExist = getPost($numero);
         
         if($numExist == false){
         
                      
             $req->execute([
                          $titre,
                          $link,
                          $numero,
                          $idClean
              ]);
             
         }  
             
    };  
    
    