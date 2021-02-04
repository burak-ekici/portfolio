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
     
     function getUser()
    {
        $db = dbConnect();
        $dbreturn = $db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
              $dbreturn->execute([
                    $_POST["username"],
                    $_POST["password"]
                ]);
            // on stock le username et password de la database dans un tableau  
        $user = $dbreturn->fetchAll();
        return $user;
    };
    
    

    
    // on verifie que le formulaire a été validé

    
    