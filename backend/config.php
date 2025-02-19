<?php

$host = $_ENV['PG_HOST'];
$port = $_ENV['PG_PORT'];
$db = $_ENV['PG_DB'];
$user = $_ENV['PG_USER'];
$password = $_ENV['PG_PASSWORD'];
$endpoint = $_ENV['PG_ENDPOINT'];


return [
    'host' => $host,
    'port' => $port,
    'dbname' => $db
];
