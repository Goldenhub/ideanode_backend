<?php

use App\Controllers\UserController;

// $config = require "../config.php";

$router->get("/users", [UserController::class, 'index']);
$router->get("/users/{user}", [UserController::class, 'show']);
