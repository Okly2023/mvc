<?php

require 'vendor/autoload.php';

use Controller\Router;

$page = $_GET['page'] ?? null;
$router = new Router();
$router->handleRequest($page);
?>