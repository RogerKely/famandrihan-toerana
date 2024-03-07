

<?php 
    require 'inc/header.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="style.css">

<div class="formulaire">
  <h1>S'inscrire en tant qu'organisateur</h1>
</div>

<section class="formu">
  <div class="form-containeri">
    <form action="" method="POST">
      <div class="form-group">
        <label for="">Nom</label>
        <input type="text" name="nom_organisateur" class="form-control" required>
        <label for="">Email</label>
        <input type="email" name="email_organisateur" class="form-control" required>
        <label for="">Mot de passe</label>
        <input type="password" name="mdp" class="form-control" required>
        <label for="">Entreprise</label>
        <input type="text" name="entreprise" class="form-control" required>
        <label for="">CIN</label>
        <input type="text" name="cin" maxlength="12" class="form-control" required>
        <button type="submit" class="btn btn-primary">M'inscrire</button>
      </div>
    </form>
  </div>
</section>

