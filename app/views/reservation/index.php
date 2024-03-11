<section id="portflio" class="portflio section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-right pb-5">
          <h2>Historique des réservations</h2>
          <a href="#" class="btn btn-warning text-dark d-inline-flex">FORMATION</a>
          <a href="#" class="btn btn-warning text-dark d-inline-flex">RESTAURATION</a>
          <a href="#" class="btn btn-warning text-dark d-inline-flex">SPORT</a>
          <a href="#" class="btn btn-warning text-dark d-inline-flex">PARKING</a>
        </div>
      </div>
    </div>
    <div class="row">
    <?php foreach ($reservation as $r):?>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
              <img src="IMAGE/<?= $r->img?>" alt="" class="img-fluid">
            </div>
            <h3 class="card-title"><?= $r->services;?></h3>
            <h6><?= $r->date_reservation;?></h6>
            <p class="lead"><?= $r->des?>
            </p>
            <button class="btn bg-warning text-dark">En savoir plus</button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>