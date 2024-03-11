
<section id="portflio" class="portflio section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <a href="?p=organisateur.service.ajouter&id=1" class="btn btn-primary text-dark d-inline-flex" >Proposer une service </a>
        </div>
        <div class="section text-center pb-5">
          <h2>Partie Organisateur</h2>

      </div>
    </div>
    <?php foreach ($service as $s):?>
      <div class="card mb-3" style="max-width: 1000px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="IMAGE/<?= $s->image_service;?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title"><?= $s->intitule;?></h5>
              <p class="card-text"><?= $s->getExtrait();?></p>
              <p class="card-text"><small class="text-body-secondary"><?= $s->date;?></small></p>
            </div>
          </div>
          <div class="mt-5 col d-flex flex-column align-items-center">
              <a href="?p=organisateur.service.editer&id=<?= $s->id; ?>" class="btn bg-primary w-50 text-dark">Modifier</a>
              <a href="?p=organisateur.service.editer" class="btn bg-danger w-50 text-dark">Supprimer</a>
            </div>
        </div>
      </div>
      <?php endforeach; ?>  
    </div>    
  </div>
</section>