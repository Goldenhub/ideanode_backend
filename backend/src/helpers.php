<?php

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "<pre/>";
    die();
}

function base_uri($path)
{
    return BASE_URI . $path . ".php";
}

function abort($statuscode)
{
    http_response_code($statuscode);
    echo "Cannot GET resource";
    die();
}

function pretty(array $data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}
