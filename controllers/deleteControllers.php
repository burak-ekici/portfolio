<?php

include 'models/videoAdminModels.php';

if(isset($_SESSION["admin"]) AND $_SESSION["admin"] ==="ok"){
    
    deleteVideo($_GET['id']);
    
    header('Location: videoAdmin.phtml');
}
else{
    header('Location: videoAdmin.phtml');
}