<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <a href="/PBE_PHP_2026/Atividade01/produto/telaCadastro">
        Ir para tela Cadastrar </a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Data</th>
            <th>ações</th>
        </th>
        <?php foreach($produtos as $id => $p): ?>
            <tr>
                <td><?= $p['nome']?></td>
                <td><?= $p['valor']?></td>
                <td><?= $p['quantidade']?></td>
                <td><?= $p['data']?></td>
                <td>
                    <a href="/PBE_PHP_2026/Atividade01/produto/telaEditar?id=<?= $id ?>">
                        Editar
                    </a>
                    <a href="/PBE_PHP_2026/Atividade01/produto/excluir?id=<?= $id ?>">
                        Excluir
              <?php endforeach; ?>
            </tr>
        
</table>
    
</body>
</html>