<?php

namespace App;

use Golden\Framework\Http\Response;

class Database
{
    public $connection;
    public $stmt;

    public function __construct($config)
    {
        $dsn = http_build_query($config, "", ";");
        $dsn = "pgsql:{$dsn}";
        try {
            $this->connection = new \PDO($dsn, $config['user'], $config['password'], [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
            ]);
        } catch (\PDOException $e) {
            dd($e->getMessage());
        }
    }

    public function query($query, $params)
    {
        $this->stmt = $this->connection->prepare($query);
        $this->stmt->execute($params);

        return $this;
    }

    public function fetchOne()
    {
        $result = $this->stmt->fetch();
        if (!$result) {
            abort(Response::HTTP_NOT_FOUND);
        }
        return $result;
    }

    public function fetchAll()
    {
        $result = $this->stmt->fetchALl();
        if (!$result) {
            abort(Response::HTTP_NOT_FOUND);
        }
        return $result;
    }
}
