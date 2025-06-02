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

            default:
                require_once $rota . 'noticias.php';
                break;
        }
    }
}
