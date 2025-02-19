<?php

namespace Golden\Framework\Http;

class Request
{

    public function __construct(
        public readonly array $getParams,
        public readonly array $postParams,
        public readonly array $cookie,
        public readonly array $files,
        public readonly array $server,
    ) {}

    public static function createFromGlobals()
    {
        return new static($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
    }

    public function getPathInfo()
    {
        return parse_url($this->server['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getMethod()
    {
        return $this->server['REQUEST_METHOD'];
    }
}
