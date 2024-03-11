<div class="fromulaire">
    <h1>S'inscrire en tant que client</h1>
</div>

<div class="form-containeri">
  <form action="?p=client.client.login" method="post">
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