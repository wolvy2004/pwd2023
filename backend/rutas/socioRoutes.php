<?php

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Raiz\Controllers\SocioController;


$app = AppFactory::create();

$app->addErrorMiddleware(displayErrorDetails: true, logErrors: true, logErrorDetails: true);


// ---- RUTAS PARA TRABAJAR CON EL CONTROLADOR ---- // 
// --------------- CRUD SIMPLE -------------------- //
// ************************************************ //
// ---------- Listar todos los Registros ---------- //

$app->get('/socios', function (Request $req, Response $res, array $args) {
    $payload = Json_Encode(SocioController::listar(), JSON_PRETTY_PRINT);
    $res->getBody()->write($payload);
    return $res->withHeader("Content-Type", "application/json");
});

//  ****** ------ Buscar por Id ------- ************* //

$app->get('/socios/{id}', function (Request $req, Response $res, array $args) {
    $payload = Json_Encode(SocioController::encontrarUno($args["id"]), JSON_PRETTY_PRINT);
    $res->getBody()->write($payload);
    return $res->withHeader("Content-Type", "application/json");
});

// ---- Crear nuevo regitro ---- //

$app->post('/socios/nuevo', function (Request $req, Response $res, array $args) {
    $payload = Json_Encode(SocioController::crear($req->getQueryParams()), JSON_PRETTY_PRINT);
    $res->getBody()->write($payload);
    return $res->withHeader("Content-Type", "application/json");
});

// ---- Modificar registro existente ---- //
$app->put('/socios/{id}', function (Request $req, Response $res, array $args) {
    $payload = Json_Encode(SocioController::actualizar($req->getQueryParams()), JSON_PRETTY_PRINT);
    $res->getBody()->write($payload);
    return $res->withHeader("Content-Type", "application/json");
});

// ---- Borrar registro existente ---- //

$app->delete('/socios/{id}', function (Request $req, Response $res, array $args) {
    $payload = Json_Encode(SocioController::borrar($args["id"]), JSON_PRETTY_PRINT);
    $res->getBody()->write($payload);
    return $res->withHeader("Content-Type", "application/json");
});


