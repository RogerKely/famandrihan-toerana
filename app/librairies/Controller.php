<?php
  /* 
   *  CORE CONTROLLER CLASS
   *  Loads Models & Views
   */
  class Controller {
    // Charger le model à partir des controllers
    public function model($model){
      // Require le fichier model
      require_once '../app/models/' . $model . '.php';
      // Instancier le model
      return new $model();
    }

    // Charger la view à partie des controlllers
    public function view($url, $data = []){
      // Vérifier l'existence des views
      if(file_exists('../app/views/'.$url.'.php')){
        // Charger les fichers view
        require_once '../app/views/'.$url.'.php';
      } else {
        // Quitter l'application quand le view n'existe pas
        die('View does not exist');
      }
    }
  }