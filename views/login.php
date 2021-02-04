<?php 
require_once(dirname(__DIR__) . '/controllers/getUserData.php');
?>


<form method="POST" action="login.phtml">
          
          <h3>Se connecter</h3>
          
          <label for="username">Identifiant : </label>
          <input type="text" name="username"/>
          <label for="password">Mot de Passe : </label>
          <input type="password" name="password"/>
          
          <button class="btn btn-primary">Se Connecter</button>

          <div><?php if(isset($error)) echo $error  ?></div>
</form>