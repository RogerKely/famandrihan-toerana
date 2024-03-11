<div class="fromulaire d-flex justify-content-center m-4">
    <h1>Se connecter en tant qu'organisateur de service</h1>
</div>

<div class="form-containeri">
<?php if(isset($connecter)){?>
      <div class="alert alert-danger text-center"><?= $connecter?></div>
    <?php }?>

  <form action="?p=organisateur.organisateur.connecter" method="post">
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" name="nom" class="form-control" required>
      <label for="mdp">Mot de passe</label>
      <input type="text" name="mdp" class="form-control" required>
      <button type="submit" class="btn btn-primary">Se connecter</button>
    </div>
  </form>
</div>
