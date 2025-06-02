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

            if (empty($titulo) || empty($descricao) || empty($categoria)) {
                echo "Preencha todos os campos obrigatórios.";
                return;
            }

            $conexao = new Conexao();
            $pdo = $conexao->getConexao();

            $sql = "INSERT INTO noticias (titulo, descricao, categoria, imagem) 
                    VALUES (:titulo, :descricao, :categoria, :imagem)";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':titulo'    => $titulo,
                ':descricao' => $descricao,
                ':categoria' => $categoria,
                ':imagem'    => $imagem,
            ]);

              if ($stmt) {
                header("Location: ?page=index");
                exit;
            } else {
                echo "Erro ao inserir notícia.";
            }
        }
    }

    public static function listarNoticias()
    {
        $conexao = new Conexao();
        $pdo = $conexao->getConexao();
        $sql = "SELECT * FROM noticias ORDER BY id DESC";
        $stmt = $pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deletarNoticia($id)
    {
        $conexao = new Conexao();
        $pdo = $conexao->getConexao();

        $sql = "DELETE FROM noticias WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        return $stmt->execute(); 
    }
}
