<?php

namespace frm;

use PDO;
use PDOException;
use PDOStatement;

class Db
{

    private $connection;
    private PDOStatement $stmt;
    private static ?Db $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
    }

    public static function getInstance(): ?Db
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection(array $db_config)
    {
        if ($this->connection instanceof PDO) {
            return $this;
        }

        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
        try {
            $this->connection = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
            return $this;
        } catch (PDOException $e) {
            // echo "DB Error: {$e->getMessage()}";
            abort(500);
        }
    }

    public function query($query, $params = []): false|static
    {
        try {
            $this->stmt = $this->connection->prepare($query);
            $this->stmt->execute($params);
        } catch (PDOException $e) {
            return False;
        }

        return $this;
    }

    public function findAll(): false|array
    {
        return $this->stmt->fetchAll();
    }

    public function find()
    {
        return $this->stmt->fetch();
    }

    public function findOrFail()
    {
        $res = $this->find();
        if (!$res) {
            abort();
        }
        return $res;
    }

    public function rowCount(): int
    {
        return $this->stmt->rowCount();
    }

}