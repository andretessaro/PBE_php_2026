<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <a href="/PBE_PHP_2026/MVC_MySql/usuario/telaCadastro">
        Ir para tela Cadastrar </a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>ações</th>
        </th>
        <?php foreach($usuarios as $id => $u): ?>
            <tr>
                <td><?= $u['nome']?></td>
                <td><?= $u['email']?></td>
                <td>
                    <a href="/PBE_PHP_2026/MVC_MySql/usuario/telaEditar?id=<?= $u['id'] ?>">
                        Editar
                    </a>
                    <a href="/PBE_PHP_2026/MVC_MySql/usuario/excluir?id=<?= 
                    $u['id'] ?>">
                        Excluir

                    </td>
                </tr>
              <?php endforeach; ?>
        
    </table>
    
</body>
</html>