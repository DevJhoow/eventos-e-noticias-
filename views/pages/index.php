<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Notícia & Eventos</title>
</head>
<body>
    <header>
    <h1><i class="bi bi-newspaper"></i> Notícia & Eventos</h1>
    <nav>
        <a href="?page=noticias"><i class="bi bi-file-text"></i> Notícia</a>
        <a href="?page=eventos"><i class="bi bi-calendar-event"></i> Eventos</a>
        <a href="?page=adm"><i class="bi bi-gear"></i> Administrativo</a>
    </nav>
</header>

    <main>
        <!-- ultimas duas noticias  -->
        <section class="noticias">
            <h2>Ultimas Notícia</h2>

            <!-- cards de noticias -->
            <?php
            use App\Models\NoticiaModel;
            $noticias = NoticiaModel::listarNoticias();
            $ultimasNoticias = array_slice($noticias, -2); // só as ultimas duas noticias mais recentes 

            foreach ($ultimasNoticias as $noticia) {
                $dataFormatada = date('d/m/Y H:i:s', strtotime($noticia['data']));
                echo '<div class="card">';
                echo '<p><i class="bi bi-clock"></i> ' . $dataFormatada . '</p>';
                echo '<h3><i class="bi bi-newspaper"></i> ' . $noticia['titulo'] . '</h3>';
                echo '<p>' . $noticia['descricao'] . ' <a href="#">leia mais</a></p>';

                 // form para deletar noticias
                echo '<form method="POST" action="?page=deletar" style="display:inline;" onsubmit="return confirm(\'Tem certeza que deseja deletar esta notícia?\');">';
                echo '<input type="hidden" name="id" value="' . $noticia['id'] . '">';
                echo '<button type="submit" name="deletar" class="btn btn-danger">';
                echo '<i class="bi bi-trash"></i> Deletar';
                echo '</button>';
                echo '</form>';

                echo '</div>';
            }

             if (isset($_GET['msg'])): ?>
                <div class="alert alert-success">
                    <?= htmlspecialchars($_GET['msg']) ?>
                </div>
            <?php endif; ?>

        </section>

        <!-- ultimos 2 eventos  -->
        <section class="eventos">
            <h2><i class="bi bi-calendar-event"></i> Próximos eventos</h2>

            <!-- cards de eventos -->
            <div class="card p-3 mb-3">
                <img src="img/" alt="evento-1" class="card-img-top">
                <h3><i class="bi bi-star"></i> Evento Especiais</h3>
                <p><i class="bi bi-calendar"></i> Data: 01/06/2025</p>
                <p><i class="bi bi-geo-alt"></i> Campinas-SP</p>
                <a href="#" class="btn btn-primary"><i class="bi bi-info-circle"></i> Sobre</a>
            </div>

            <div class="card p-3 mb-3">
                <img src="img/" alt="evento-2" class="card-img-top">
                <h3><i class="bi bi-star"></i> Encontro Tecnologia</h3>
                <p><i class="bi bi-calendar"></i> Data: 01/06/2025</p>
                <p><i class="bi bi-geo-alt"></i> Vinhedo-SP</p>
                <a href="#" class="btn btn-primary"><i class="bi bi-info-circle"></i> Sobre</a>
            </div>
        </section>

    </main>
    
    <footer>
            <p><i class="bi bi-c-circle"></i>Eventos e Notícia</p>
    </footer>

    <script src="../../public/js/script.js"></script>
    
</body>
</html>