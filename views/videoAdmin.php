<?php 
require_once(dirname(__DIR__) . '/controllers/videoAdminControllers.php');
?>
<div class="contain"> 
     
     <form class="formulaire" action="videoAdmin.phtml" method="POST">
        <legend>Ajouter une video :</legend>
           <label for="titre">Titre</label>
           <input type="text" name="titre"/>
           
           <label for="numero">Video n° : </label>
           <input type="number" name="numero"/>
           
           <label for="link">Lien</label>
           <textarea type="text" name="link"></textarea>
           
           <button class="btn btn-warning">Valider</button>
           
            <?php if(isset($annonce)){
                      echo $annonce;
                  }; ?>
           
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
</div>      
      