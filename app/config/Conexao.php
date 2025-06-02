<?php

namespace App\Config;

use PDO;
use PDOException;

class Conexao {
    private $host;
    private $db;
    private $user;
    private $pass;
    private $conexao;

    public function __construct()
    {
        $env = parse_ini_file(__DIR__ . '/../../.env'); // Subiu dois níveis, pois está em app/config

        $this->host = $env['DB_HOST'] ?? '';
        $this->db   = $env['DB_NAME'] ?? '';
        $this->user = $env['DB_USER'] ?? '';
        $this->pass = $env['DB_PASS'] ?? '';

        $this->conectar();
    }

    private function conectar() {
        try {
            $this->conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->db",
                $this->user,
                $this->pass
            );
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    public function getConexao() {
        return $this->conexao;
    }
}
