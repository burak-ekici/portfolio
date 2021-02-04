<?php  

require_once(dirname(__DIR__) . '/models/videoAdminModels.php');



if(isset($_SESSION["admin"]) AND $_SESSION["admin"] ==="ok"){
            // on verifie que les input ont été remplie
           if(isset($_POST["titre"]) AND isset($_POST["numero"]) AND isset($_POST["link"]) AND !empty($_POST["titre"]) AND !empty($_POST["numero"]) AND !empty($_POST["link"])){
                $titre = htmlspecialchars($_POST["titre"]) ;
                $numero = htmlspecialchars($_POST["numero"]) ;
                $link = htmlspecialchars($_POST["link"]) ;
            // et on evite les injections de code dans les inputs
             if(!empty($titre) AND !empty($numero) AND !empty($link)){
                  // on selectionne la video du numero de l'input puis on change ses valeurs par les nouvelles definie
                  
                  
                  
                  editVideo($titre,$link,$numero,$_GET["id"]);
                  
                  header('Location:modifier.phtml');
                  
             }
            
          }else if (empty($_POST["titre"]) AND empty($_POST["numero"]) AND empty($_POST["description"]) AND empty($_POST["link"]))
            {
            $annonce = "Veuillez remplir tous les champs";
            }
        }// on redirige sur la page de connection pour eviter que quelqu'un essai d'entrer sur cette page sans se connecter
        else if (!empty($_SESSION["admin"]) OR $_SESSION["admin"] != "ok"){
          header('Location: login.phtml');
        };
        
    