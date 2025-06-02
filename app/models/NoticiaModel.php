<?php

namespace App\Models;

use App\Config\Conexao;
use PDO;

class NoticiaModel
{
    public static function salvarNoticia()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo    = $_POST['titulo'] ?? '';
            $descricao = $_POST['descricao'] ?? '';
            $categoria = $_POST['categoria'] ?? '';
            $imagem    = $_POST['imagem'] ?? '';
            $data      = $_POST['data'] ?? '';

            $conexao = new Conexao();
            $pdo = $conexao->getConexao();

            $sql = "INSERT INTO noticias (titulo, descricao, categoria, imagem, data) 
                    VALUES (:titulo, :descricao, :categoria, :imagem, :data)";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':titulo'    => $titulo,
                ':descricao' => $descricao,
                ':categoria' => $categoria,
                ':imagem'    => $imagem,
                ':data'      => $data
            ]);

            header("Location: ?page=index");
            exit;
        }
    }
}
