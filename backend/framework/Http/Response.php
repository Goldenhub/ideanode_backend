<?php

namespace Golden\Framework\Http;

class Response
{
    const HTTP_OK = 200;
    const HTTP_CREATED = 201;
    const HTTP_BAD_REQUEST = 400;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_FORBIDDEN = 403;
    const HTTP_NOT_FOUND = 404;
    const HTTP_METHOD_NOT_ALLOWED = 405;

    public function __construct(
        private ?string $content = '',
        private int $status = self::HTTP_OK,
        private array $headers = ['Content-Type' => 'application/json']
    ) {}

    public function send(): void
    {
        http_response_code($this->status);
        header('Content-Type: ' . $this->headers['Content-Type']);
        echo $this->content;
    }
}
