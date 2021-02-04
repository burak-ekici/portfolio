<?php 
require_once(dirname(__DIR__) . '/controllers/editControllers.php');
 if(isset($_GET['id']) && !empty($_GET['id'])){
         $videos = getPosts();
         $vod = getPost($_GET['id']);
?>
         
<form  method="POST">
    
           <legend>Modifier une video</legend>
           <label for="titre">Titre</label>
           <input type="text" name="titre" value="<?php echo $vod['titre'] ?>"/>
           
           <label for="numero">Video n° : </label>
           <input value="<?= $vod['numero'] ?>" type="number" name="numero"/>
           
          <label for="link">Lien</label>
           <textarea  type="text" name="link"><?= $vod['lien'] ?></textarea>
        
           
           
           <a class="ajouter btn btn-primary" href="videoAdmin.phtml">Ajouter une video<i class="fas fa-plus"></i></a>
           <button class="btn btn-warning">Valider</button>
           <?php echo $annonce; ?>
</form>

<div class="edit">
          <h1>Video(s) existant(s) :</h1>
          <ul>
             
             <?php  foreach ($videos as $video){ ?>
               
               <li>
                   <span class="numero"><?php echo $video["numero"] ?> </span>
                   <span class="titre"><?php echo $video["titre"] ?> </span>
                   <div class="action">
                   <a href="modifier.phtml?id=<?php echo $video['numero'] ?>"><i class="fas fa-edit"></i></a>
                   <a href="supprimer.phtml?id=<?= $video['numero'] ?>"><button class="btn btn-danger">x</button></a>
                   </div>
               </li>
              
              <?php } ?>
          </ul>
          
</div>  
       

<?php         
      }else{ 
         $videos = getPosts();  ?>
         
<form  method="POST">
    
        <legend>Modifier une video</legend>
           <label for="titre">Titre</label>
           <input type="text" name="titre"/>
           
           <label for="numero">Video n° : </label>
           <input type="number" name="numero"/>
           
          <label for="link">Lien</label>
           <textarea  type="text" name="link"></textarea>
           
           
           
           
           <a class="ajouter btn btn-primary" href="videoAdmin.phtml">Ajouter une video<i class="fas fa-plus"></i></a>
           <button class="btn btn-warning">Valider</button>
           <?php if(!empty($annonce)) { echo $annonce; }; ?>
                 
</form>

<div class="edit">
          <h1>Video(s) existant(s) :</h1>
          <ul>
             
             <?php  foreach ($videos as $video){ ?>
               
               <li>
                   <span class="numero"><?php echo $video["numero"]; ?> </span>
                   <span class="titre"><?php echo $video["titre"]; ?> </span>
                   <div>
                   <a href="modifier.phtml?id=<?php echo $video['numero']; ?>"><i class="fas fa-edit"></i></a>
                   <a href="supprimer.phtml?id=<?= $video['numero'] ?>"><button class="btn btn-danger">x</button></a>
                   </div>
               </li>
              
              <?php }; ?>
          </ul>
   <?php } ?>

