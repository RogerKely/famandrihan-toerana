<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning">Reser</span>VEO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">ACCEUIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?p=client.reservation.index&id=1">CLIENT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?p=organisateur.service.index&id=1">ORGANISER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT ;?>/index.php?p=service.index">RESERVER</a>
              </li>
            </ul> 
          </div>
          <div class="d-flex justify-content-end">
            <?php if(isset($_SESSION['authentification'])):?>
            <a href="#" class="mg-3 md-3 nav-link"><?=$_SESSION['authentification']?></a>
            <a class="nav-link mg-3" href="<?= URLROOT ;?>/index.php?p=login.deconnecter">Déconnecter</a>
            <?php endif;?>
          </div>
          <div>
          <a class="nav-link" href="<?= URLROOT ;?>/index.php?p=login.loginChoice">Se connecter</a>
          </div>
        </div>
      </nav>
  <?= $content; ?>
</body>
<?php require 'Template_footer.php'; ?>