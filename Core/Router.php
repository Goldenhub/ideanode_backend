<?php

namespace Core;

use Core\Response;

class Router
{
    public $routes = [];

    public function get($uri, $controller)
    {
        return $this->add("GET", $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add("POST", $uri, $controller);
    }

    public function patch($uri, $controller) {}

    public function put($uri, $controller) {}

    public function delete($uri, $controller) {}

    public function add($method, $uri, $controller)
    {
        $this->routes[] = compact('method', 'uri', 'controller');
    }

    public function route($method, $uri)
    {
        // pretty($this->routes);
        $method = strtoupper($method);
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['uri'] === $uri) {
                exit(require base_uri($route['controller']));
            }
        }
        abort(Response::NOT_FOUND);
    }
}
