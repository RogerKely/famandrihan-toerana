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
              <h2><?= $service->intitule?><br></h2>
              <p><?= $service->description;?>
              </p>
              
              <div class="input-group input-group-sm">
                <div style="display: block; margin-bottom: 5px;">
                    <label for="andry">Nombre de place</label>
                    <input type="text" name="nom_client" class="form-control" required id="andry">
                <div style="display: block;">
                    <label for="zoky">Delait</label>
                    <input type="text" name="nom_client" class="form-control" required id="zoky">
                </div>
                <input class="btn btn-warning" type="submit" value="Reserver">
              </div>
        </div>
      </div>
    </section>