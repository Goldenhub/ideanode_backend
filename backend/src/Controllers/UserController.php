<?php

namespace App\Controllers;

use Golden\Framework\Http\Response;

class UserController
{
    public function index(): Response
    {
        $content = "<h1>Hello world</h1>";
        return new Response($content);
    }
    public function show($id): Response
    {
        $content = "<h1>Hello world {$id}</h1>";
        return new Response($content);
    }
}
