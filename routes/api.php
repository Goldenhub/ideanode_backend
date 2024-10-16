<?php

use App\Controllers\UserController;

// $config = require "../config.php";

$router->get("/users", [UserController::class, 'index']);
$router->get("/users/{user}", [UserController::class, 'view']);
$router->get("/users/{user}/ideas/{idea}", [UserController::class, 'store']);
