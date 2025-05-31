<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\RouterController;

$router = new RouterController();
$router->handleRequest();
