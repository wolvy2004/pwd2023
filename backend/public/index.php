<?php

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require __DIR__.'/../vendor/autoload.php';

/// *** ---- CREAMOS LA INSTANCIA DE SLIM ---- *** ///

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

// ----- Agregar las Rutas de cada Controlador ------ //
require_once('../rutas/socioRoutes.php');

$app->run();