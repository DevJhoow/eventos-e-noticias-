<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Notícia & Eventos</title>
</head>
<body>
    <header>
        <h1> Notícia & Eventos</h1>
        <nav>
            <a href="?page=noticias">Notícia</a>
            <a href="?page=eveto">Eventos</a>
            <a href="?page=adm">Administrativo</a>
        </nav>
    </header>

    <main>
        <!-- ultimas duas noticias  -->
        <section class="noticias">
            <h2>Ultimas Notícia</h2>
            <!-- cards de noticias -->
             <div class="card">
                <img src="img/" alt="noticia-1">
                <h3> noticia 1 </h3>
                <p>resumo da notícia 1 <a href="#">leia mais</a></p>
             </div>
             <div class="card">
                <img src="img/" alt="noticia-2">
                <h3> noticia 1 </h3>
                <p>resumo da notícia 2 <a href="#">leia mais</a></p>
             </div>
        </section>

        <!-- ultimos 2 eventos  -->
        <section class="eventos">
            <h2> Proximos eventos </h2>

             <!-- cards de eventos -->
             <div class="card">
                <img src="img/" alt="evento-1">
                <h3> Evento Especiais  </h3>
                <p>Data: 01/06/2025 - Campinas-sp</p>
                <a href="">Sobre</a>
             </div>
             <div class="card">
                <img src="img/" alt="evento-2">
                <h3> Encontro Tecnologia </h3>
                <p>Data: 01/06/2025 - Vinehdo-sp</p>
                <a href="">Sobre</a>
             </div>
          
        </section>
    </main>
    
    <footer>
        <p> &copy; Eventos e Notícia  </p>
    </footer>
    
</body>
</html>