
<div class="d-flex  justify-content-center">
<div class="w-50">
    <form action="?p=organisateur.service.editer&id=<?= $service2->id;?>" method="post" enctype="multipart/form-data" class="row rounded m-5 shadow-lg p-3 mb-5 bg-secondary bg-gradient text-white g-3">
      <div class="col-12">
          <img src="<?= $service2->image_service;?>" alt="" class="w-50 h-auto rounded">
      </div>
      <div class="col-md-6">
        <label for="intitule" class="form-label shadow">Titre</label>
        <input type="text" class="form-control shadow" name="intitule" id="intitule" value="<?= $service2->intitule;?>">
      </div>
      <div class="col-md-6">
        <label for="prix" class="form-label">Prix</label>
        <input type="text" class="form-control shadow" id="prix" name="prix" value="<?= $service2->prix;?>">
      </div>
      <div class="col-12" bg-body-tertiary text-body>
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control shadow"><?= $service2->description;?></textarea>
      </div>
      <div class="col-6">
        <label for="localisation" class="form-label">Lieu</label>
        <input type="text" class="form-control shadow" name="localisation" id="localisation" value="<?= $service2->localisation;?>">
      </div>
      <div class="col-6">
        <label for="date_service" class="form-label">Date</label>
        <input type="date" class="form-control shadow" id="date_service" name="date_service" value="<?= $service2->date_service;?>">
      </div>
      <div class="col-md-6">
        <label for="id_type" class="form-label">Type de service</label>
        <select id="id_type" class="form-select shadow" name="id_type">
          <?php foreach($type as $t) : ?>
            <option value="<?= $t->id;?>"><?= $t->nom_type;?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-md-12">
        <label for="image" class="form-label">Image du service</label>
        <input type="file" class="form-control shadow w-25" name="image" value="<?= $service2->image_service;?>" require required>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input shadow" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Enregister</button>
      </div>
    </form>
  </div>
</div>