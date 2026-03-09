<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <a href="/PBE_PHP_2026/MVC_avaliação/livro/telaCadastro">
        Ir para tela Cadastrar </a>
    <table border="1">
        <tr>
            <th>Titulo</th>
            <th>Valor</th>
            <th>Quantidade</th>
        </th>
        <?php foreach($livros as $id => $l): ?>
            <tr>
                <td><?= $l['titulo']?></td>
                <td><?= $l['valor']?></td>
                <td><?= $l['quantidade']?></td>

                <td>
                    <a href="/PBE_PHP_2026/MVC_avaliação/livro/telaEditar?id=<?= $l['id'] ?>">
                        Editar
                    </a>
                    <a href="/PBE_PHP_2026/MVC_avaliação/livro/excluir?id=<?= 
                    $l['id'] ?>">
                        Excluir

                    </td>
                </tr>
              <?php endforeach; ?>
        
    </table>
    
</body>
</html>