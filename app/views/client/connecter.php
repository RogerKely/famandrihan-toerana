<div class="fromulaire d-flex justify-content-center m-4">
    <h1>Se connecter en tant que client</h1>
</div>

<div class="form-containeri">
<?php if(isset($connecter)){?>
      <div class="alert alert-danger text-center"><?= $connecter?></div>
    <?php }?>

  <form action="?p=client.client.connecter" method="post">
    <div class="form-group">
      <label for="mdp">Nom</label>
      <input type="text" name="nom_client" class="form-control" required>
      <label for="mdp">Mot de passe</label>
      <input type="text" name="mdp" class="form-control" required>
      <button type="submit" class="btn btn-primary">Se connecter</button>
    </div>
  </form>
</div>
