<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\RouterController;

$router = new RouterController();
$router->handleRequest();

// controller que esta com a responsabiliade de renderizar as rotas , deixei tudo por conta dele; 
