<?php
namespace API;

ini_set("display_errors", E_ALL);

require '../vendor/autoload.php';
require 'autoload.php';
require 'config.php';
use API\Controller\RevistaController as RevistaController;

$app = new \Slim\Slim();

$app->get('/revistas/:keywords', function($keywords){
  RevistaController::getInstance()->sugerir($keywords);
});
$app->get('/revistas/publicar/:nombre', function($nombre){
  RevistaController::getInstance()->publicar($nombre);
});

$app->run();
