<?php

// classe para fazer o roteamento 

namespace App\Controllers;

class RouterController
{
    public function handleRequest()
    {
        $page = $_GET['page'] ?? 'index';

        // rota dos arquivos de dentro da pasta pages 
        $rota= dirname(__DIR__, 2) . '/views/pages/';
        
        switch ($page) {
            case 'index': //ira começar por esta rota como ja definimos 
                require_once $rota . 'index.php';
                break;
            case 'adm':
                require_once $rota . 'adm.php';
                break;
            case 'eventos':
                require_once $rota . 'eventos.php';
                break;
            default:
                require_once $rota . 'noticias.php';
                break;
        }
    }
}
