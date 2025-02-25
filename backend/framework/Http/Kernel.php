<?php

namespace Golden\Framework\Http;

use App\Router;


class Kernel
{
    public function handle(Request $request): Response
    {
        $router = new Router();
        include base_uri("routes/api");

        $uri = $request->getPathInfo();
        $method = $request->getMethod();

        [$controller, $method, $param] = $router->route($uri, $method);

        // $response = (new $controller())->$method(...$param);
        $response = call_user_func_array([new $controller, $method], $param);

        return $response;
    }
}
