<?php

declare(strict_types=1);

use App\Router;
use Golden\Framework\Http\Kernel;
use Golden\Framework\Http\Request;
use Golden\Framework\Http\Response;

const BASE_URI = __DIR__ . "/" . ".." . "/";

require BASE_URI . "src/helpers.php";

require_once base_uri("vendor/autoload");

// $response = new Response(content: "Hello", status: 200, headers: []);
$request = Request::createFromGlobals();


$kernel = new Kernel();
$response = $kernel->handle($request);
$response->send();
