<?php

namespace App;

use Golden\Framework\Http\Response;

class Router
{
    public $routes = [];

    public function get($uri, $handler)
    {

        return $this->add("GET", $uri, $handler);
    }

    public function post($uri, $handler)
    {
        return $this->add("POST", $uri, $handler);
    }

    public function patch($uri, $handler)
    {
        return $this->add("PATCH", $uri, $handler);
    }

    public function put($uri, $handler)
    {
        return $this->add("PUT", $uri, $handler);
    }

    public function delete($uri, $handler)
    {
        return $this->add("DELETE", $uri, $handler);
    }

    public function add($method, $uri, $handler)
    {
        $uri = $this->parse($uri);

        $this->routes[] = compact('method', 'uri', 'handler');
    }

    public function route($uri, $method)
    {
        // dd($this->routes);
        // pretty($this->routes);
        $method = strtoupper($method);
        // dd($uri);
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && preg_match($route['uri'], $uri, $matches)) {
                array_shift($matches);
                // dd($matches);
                $route['handler'][] = $matches;
                // dd($route['handler']);
                return $route['handler'];
            }
        }
        abort(Response::HTTP_NOT_FOUND);
    }

    public function parse($uri)
    {
        $pattern = preg_replace('/\{(\w+)\}/', '(\d+)', $uri);  // For numeric {id} only
        $pattern = '/^' . str_replace('/', '\/', $pattern) . '$/';   // Escape slashes
        return $pattern;
    }
}
