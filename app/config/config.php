<?php
define('HOTE', 'localhost');
define ('USER', 'root');
define ('MDP', '');
define ('BD', 'famandrihana');

define ('URLROOT', 'http://localhost/www/famandrihana/famandrihan-toerana/');

spl_autoload_register(function($classname){
  require_once 'librairies/'.$classname.'.php';
});
?>