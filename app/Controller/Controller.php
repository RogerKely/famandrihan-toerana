<?php

namespace App\Controller;

class Controller
{

  protected $viewPath;
  protected $template;

  protected function render($view , $variable = [])
  {
    ob_start();
    extract($variable);
    require ($this->viewPath . str_replace(".", "/" ,$view) . ".php");
    $content =ob_get_clean();
    require($this->viewPath . 'default/' . $this->template . '.php');

  }

  protected function forbidden()
  {
    header('HTTP/1.0 403 Forbidden');
    die('Acces Interdit');
    header('location:?p=service.acceuil');
  }

  protected function notFound()
  {
    header('HTTP/1.0 404 not Found');
    die ('Page introuvable');
  }
}