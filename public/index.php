<?php

use Core\Router;

const BASE_URI = __DIR__ . "/" . ".." . "/";

require BASE_URI . "Core/helpers.php";

require base_uri("Vendor/autoloader");

$router = new Router();
require base_uri("/routes");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($method, $uri);
