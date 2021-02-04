
<?php 

require_once(dirname(__DIR__) . '/controllers/getData.php');
?>

<section class="cards">
    
    <!--on parcours chaque element du tableau pour creer une carte par element du tableau-->
    <?php  foreach($videos as $video){ ?>
    
    <div class="card">
    <div>
    <p class="titre">
    <?php echo $video["titre"] ?> 
    </p><div class="card_image-container">
    <?php echo htmlspecialchars_decode($video["lien"]) ?> 
    </div></div><div class="card_info"> <p class="card_numero">
    <?php echo $video["numero"] ?>
    </p></div>
    </div>
    
    <?php } ?>
                
</section>

