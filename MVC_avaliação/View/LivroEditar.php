<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2> Editar livros<h2>
        <a href="/PBE_PHP_2026/MVC_avaliação/livro/listar">Ir para a tela Listar </a>

    <form method = "POST" action = "atualizar?id=<?= $_GET['id'] ?>">
        <form method = "POST" action = "atualizar?id=<?= $_GET['id'] ?>">
            <input type= "text" name = "id" value="<?= htmlspecialchars($_GET['id'])?>"disabled>
            <input type= "text" name = "titulo" value="<?= htmlspecialchars($livro['titulo'])?>"require>
            <input type= "text" name = "valor" value="<?= hrmlspecialchars($livro['valor'])?>"require>
            <input type= "text" name = "quantidade" value="<?= hrmlspecialchars($livro['quantidade'])?>"require>


    </form>

</body>
</html>
