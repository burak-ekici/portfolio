<?php

require_once(dirname(__DIR__) . '/models/LoginDB.php');

if(isset($_SESSION["admin"]) AND $_SESSION["admin"] ==="ok"){
header('Location: videoAdmin.phtml');

}



if(isset($_POST) AND !empty($_POST)){
// et que les inputs username et password on été remplie, on empeche l'injection de code dans les inputs
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    
if (!empty($username) AND !empty($password)){
  // on recupere les log de l'admin
   
   
   $user=getUser();
  
  // si les elements des inputs et de la databses correspondent alors on donne l'acces a videoAdmin.phtml, la page qui permet d'ajouter du contenue
  if(!empty($user)){
    if($user[0]["username"] == ($username) AND $user[0]["password"] == ($password)){
      $_SESSION["admin"] = "ok";
      header("location:videoAdmin.phtml");
    }
  }
  // sinon on indique que l'identifiant est incorrect
  else{
    $error = "Identifiants incorrect";
    
  }
}

else{
  $error = "Veuillez remplir tous les champs !";
}
};






            
          
        