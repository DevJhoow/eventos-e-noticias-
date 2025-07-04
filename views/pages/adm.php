<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title> Sobre Eventos</title>
    <style>
        form {
            max-width: 600px;
            margin: 2rem auto;
            padding: 2rem;
            background: #f9f9f9;
            border-radius: 10px;
        }

        form input, 
        form textarea, 
        form select, 
        form button {
            width: 100%;
            margin-bottom: 1rem;
            padding: 10px;
            border:  1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1> Administrativo </h1>
        <nav>
            <a href="?page=index"> Home </a>
            <a href="?page=noticias">Noticias</a>
            <a href="?page=eventos">Eventos</a>
        </nav>
    </header>

    <main>
        <h2 style="text-align: center;" > Cadastrar Noticias e Eventos </h2>

        <!-- form para salvar noticias  -->
        <form action="index.php?page=salvar" method="post">
            <label for="titulo"> Título:</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="titulo"> Descrição:</label>
            <textarea name="descricao" id="descricao" rows="4" required></textarea>

            <label for="categoria"> Categoria:</label>
            <select name="categoria" id="categoria">
                <option value="noticia"> Notícia </option>
                <option value="evento"> Evento </option>
            </select>

            <label for="image">URL da imagem</label>
            <input type="text" name="imagem" id="imagem">

            <button type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>