<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar usuário<h2>
    <a href="/PBE_PHP_2026/MVC_MySql/usuario/listar">Ir para tela Listar</a>

    <form method = "POST" action = "atualizar?id=<?= $_GET['id'] ?>">
       <form method = "POST" action = "atualizar?id=<?= $_GET['id'] ?>">
        <input type= "text" name = "id" value="<?= htmlspecialchars($_GET['id'])?>"disabled>
        <input type = "text" name = "nome" value="<?= htmlspecialchars($usuario['nome'])?>"require>
        <input type = "email" name = "email" value="<?= htmlspecialchars($usuario['email'])?>"require>

        
      
    </form>
    
</body>
</html>