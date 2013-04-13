<?php

require_once("Library/Core/Autoloader.php");

use Library\Core\Autoloader;
use Library\Core\Http\Route;
use Library\Core\Http\Response;
use Library\Core\Http\Request;
use Library\Core\Http\Router;
use Library\Core\Http\FrontController;
use Library\Core\Http\Dispatcher;

$autoloader = Autoloader::getInstance();

$response = new Response();
$request = new Request();
$router = new Router($request);
$dispatcher = new Dispatcher($router);

$frontController = new FrontController($dispatcher);
$frontController->run($request, $response);
