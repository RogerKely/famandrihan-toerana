<?php
    require 'inc/header.php';
?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
 
<div class="fromulaire">
    <h1>S'inscrire en tant que client</h1>
</div>

<div class="form-containeri">
  <form action="" method="POST">
    <div class="form-group">
      <label for="">Nom</label>
      <input type="text" name="nom_client" class="form-control" required>
      <label for="">Email</label>
      <input type="email" name="email_client" class="form-control" required>
      <label for="">Mot de passe</label>
      <input type="password" name="mdp" class="form-control" required>
      <label for="">Adresse</label>
      <input type="text" name="adresse_client" class="form-control" required>
      <label for="">Contact</label>
      <input type="text" name="contact_client" maxlength="13" class="form-control" required>
      <button type="submit" class="btn btn-primary">M'inscrire</button>
    </div>
  </form>
</div>

   