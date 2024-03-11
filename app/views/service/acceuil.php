
<div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <?php 
          $i = 0;
          foreach($service as $s):
          $i++;
          $i==1?$i='active':$i;
          ?>
            <div class="carousel-item <?= $i;?>">
                <img src="IMAGE/<?= $s->img;?>" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5><?= $s->intitule;?></h5>
                    <p><?= $s->description;?></p>
                    <p><a href="#" class="btn btn-warning mt-3">En savoir plus</a></p>
                </div>
            </div>
          <?php endforeach;?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- about section -->
    <section id="about" class="about section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="IMAGE/img8.webp" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
              <h2>We Provide Best Quality<br>Service Ever</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolor error dolores incidunt, asperiores harum expedita, 
                et excepturi deleniti dignissimos numquam atque fugiat placeat distinctio vitae aliquid tenetur vero quos nostrum! Debitis 
                eum atque facilis 
                omnis officia, maiores facere odit non quibusdam, molestias labore harum obcaecati quis aspernatur vitae expedita!
              </p>
              <a href="#" class="btn btn-warning">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- services section -->

<section id="services" class="services section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>Our Service</h2>
          <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Officiis, quaerat.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2">
          <div class="card-body">
            <i class="bi bi-subtract"></i>
            <h3 class="card-title">Durabilité</h3>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor nihil, porro ipsam eos 
              repellendus impedit vero molestias aperiam eligendi accusamus officiis 
              reiciendis quia quo recusandae?</p>
              <button class="btn btn-warning text-dark">Lire plus</button>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2">
          <div class="card-body">
            <i class="bi bi-slack"></i>
            <h3 class="card-title">Durabilité</h3>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor nihil, porro ipsam eos 
              repellendus impedit vero molestias aperiam eligendi accusamus officiis 
              reiciendis quia quo recusandae?</p>
              <button class="btn btn-warning text-dark">Lire plus</button>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2">
          <div class="card-body">
            <i class="bi bi-playstation"></i>
            <h3 class="card-title">Integrité</h3>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor nihil, porro ipsam eos 
              repellendus impedit vero molestias aperiam eligendi accusamus officiis 
              reiciendis quia quo recusandae?</p>
              <button class="btn btn-warning text-dark">Lire plus</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- section organisateur -->

<section id="team" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>Nos anciens organisateurs</h2>
          <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Officiis, quaerat.</p>
        </div>
      </div>
    
      <div class="row">
        <?php foreach($org as $o):?>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="IMAGE/<?= $o->image_organisateur;?>" alt="" class="img-fluid rounded-circle">
              <h3 class="carde-title py-2"><?= $o->nom_organisateur;?></h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae magni dolorum tempore enim, vero exercitationem.</p>

              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</section>