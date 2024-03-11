
<section id="portflio" class="portflio section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>Our Projects</h2>
          <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Officiis, quaerat.</p>
          <?php foreach ($type as $t) :?>
          <a href="?p=service.type&id=<?= $t->id;?>" class="btn btn-warning text-dark d-inline-flex"><?=strtoupper($t->nom_type);?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="row">
    <?php foreach ($service as $s):?>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
              <img src="IMAGE/<?= $s->img?>" alt="" class="img-fluid">
            </div>
            <h3 class="card-title"><?= $s->intitule;?></h3>
            <p class="lead"><?= $s->getExtrait();?>
            </p>
            <a href="<?=$s->getUrl();?>" class="btn bg-warning text-dark">En savoir plus</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>