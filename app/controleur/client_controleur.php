<?php
class ClientControleur extends Controller
{
  protected $clientModel;
  public function __construct()
  {
    $this->clientModel= $this->model('Client');
  }
}