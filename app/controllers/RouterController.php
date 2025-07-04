<?php

namespace App\Controllers;

use App\Models\NoticiaModel;

class RouterController
{
    public function handleRequest()
    {
        $page = $_GET['page'] ?? 'index';
        $rota = dirname(__DIR__, 2) . '/views/pages/';

        switch ($page) {
            case 'index':
                require_once $rota . 'index.php';
                break;

            case 'adm':
                require_once $rota . 'adm.php';
                break;

            case 'eventos':
                require_once $rota . 'eventos.php';
                break;

            case 'salvar':
                $noticiaModel = new NoticiaModel();
                $noticiaModel->salvarNoticia();
                break;

            case 'deletar':
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $deletou = NoticiaModel::deletarNoticia($id);

                    if ($deletou) {
                        header("Location: ?page=index");
                        exit;
                    } else {
                        echo "Erro ao deletar notícia.";
                    }
                }
                break;
    
            default:
                require_once $rota . 'noticias.php';
                break;
        }
    }
}
