<section id="about" class="about section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="IMAGE/<?= $service->image_service?>" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
              <h2><?= $service->intitule?><br></h2>
              <p><?= $service->description;?>
              </p>
              <form action="?p=client.reservation.ajouter&id=<?= $service->id?>&id1=<?= $service->id_type;?>" method="post">
                <div class="input-group input-group-sm">
                  <div style="display: block; margin-bottom: 5px;">
                      <label for="nombre_reserver">Nombre de place</label>
                      <input type="text" name="nombre_reserver" class="form-control" required id="nombre_reserver">
                  <div style="display: block;">
                      <label for="delait">Delait</label>
                      <input type="text" name="delait" class="form-control" required id="delait">
                  </div>
                  <input class="btn btn-warning" type="submit">
                </div>
              </form>
        </div>
      </div>
    </section>