<?php 

require_once(dirname(__DIR__) . '/models/videoAdminModels.php');



// on verifie que notre session storage que l'on genere sur la page login est bien definie
if(isset($_SESSION["admin"]) AND $_SESSION["admin"] ==="ok"){
          // on verifie que les input ont été remplie
           if(isset($_POST["titre"]) AND isset($_POST["numero"]) AND isset($_POST["link"]) AND !empty($_POST["titre"]) AND !empty($_POST["numero"]) AND !empty($_POST["link"])){
                $titre = htmlspecialchars($_POST["titre"]) ;
                $numero = htmlspecialchars($_POST["numero"]) ;
                $link = htmlspecialchars($_POST["link"]) ;
            // on empeche l'injection de code par les inputs
             if(!empty($titre) AND !empty($numero) AND !empty($link)){
            
                  // on ajoutes les elements des inputs dans notre database en securisant les values
                  addVideo($titre,$link,$numero);
                            
                  $annonce = "La Video à bien été enregistré";  
               
             }
          // on indique que tous les champs ne sont pas remplie 
          }else if (empty($_POST["titre"]) AND empty($_POST["numero"]) AND empty($_POST["link"]))
            {
            $annonce = "Veuillez remplir tous les champs";
            }
        }  
        // on redirige sur la page de connection pour eviter que quelqu'un essai d'entrer sur cette page sans se connecter
        else if (!empty($_SESSION["admin"]) OR $_SESSION["admin"] != "ok"){
          header('Location: login.phtml');
        };
        
$videos = getPosts();

