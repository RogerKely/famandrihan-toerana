<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning">Reser</span>VEO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <!--<li class="nav-item">
                <a class="nav-link" href="acceuil.php">ACCEUIL</a>
              </li>-->
              <li class="nav-item">
                <a class="nav-link" href="client.php">CLIENT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="organisateur.php">ORGANISER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reservation.php">RESERVER</a>
              </li>
            </ul>  
          </div>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="IMAGE/img11.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Event 1</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis fuga amet, aut debitis quae assumenda?</p>
                    <p><a href="#" class="btn btn-warning mt-3">En savoir plus</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="IMAGE/img11.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Event 2</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis fuga amet, aut debitis quae assumenda?</p>
                    <p><a href="#" class="btn btn-warning mt-3">En savoir plus</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="IMAGE/img11.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Event 3</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis fuga amet, aut debitis quae assumenda?</p>
                    <p><a href="#" class="btn btn-warning mt-3">En savoir plus</a></p>
                </div>
            </div>
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

<!-- section portefeuille -->


<section id="portflio" class="portflio section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>Our Projects</h2>
          <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Officiis, quaerat.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
              <img src="IMAGE/img9.avif" alt="" class="img-fluid">
            </div>
            <h3 class="card-title">Organiser</h3>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
               Nulla eius a amet vero voluptate quo illo cum numquam quam ipsa.
            </p>
            <button class="btn bg-warning text-dark">En savoir plus</button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
              <img src="IMAGE/img1.avif" alt="" class="img-fluid">
            </div>
            <h3 class="card-title">Organiser</h3>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
               Nulla eius a amet vero voluptate quo illo cum numquam quam ipsa.
            </p>
            <button class="btn bg-warning text-dark">En savoir plus</button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4">
              <img src="IMAGE/img3.avif" alt="" class="img-fluid">
            </div>
            <h3 class="card-title">Organiser</h3>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
               Nulla eius a amet vero voluptate quo illo cum numquam quam ipsa.
            </p>
            <button class="btn bg-warning text-dark">En savoir plus</button>
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
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="IMAGE/andhy.jpg" alt="" class="img-fluid rounded-circle">
              <h3 class="carde-title py-2">Andhy Maminirina</h3>
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

        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="IMAGE/ANDRY.jpg" alt="" class="img-fluid rounded-circle">
              <h3 class="carde-title py-2">Andry Ramboaharisoa </h3>
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

        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="IMAGE/andhy.jpg" alt="" class="img-fluid rounded-circle">
              <h3 class="carde-title py-2">Roger Kely</h3>
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

        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="IMAGE/ANDRY.jpg" alt="" class="img-fluid rounded-circle">
              <h3 class="carde-title py-2">Event Dream</h3>
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
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>