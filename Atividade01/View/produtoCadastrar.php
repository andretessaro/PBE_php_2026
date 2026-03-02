<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
</head>
<body>
    <a href="/PBE_PHP_2026/Atividade01/produto/listar">Ir para tela Listar</a>
    <form method = "POST" action = "salvar" >
        <input type = "text" name = "nome" placeholder = "nome do produto"    
        require >
        <input type = "text" name = "valor" placeholder = "Valor do produto" require >
        <input type = "number" name = "quantidade" placeholder = "quantidade desponivel" require >
        <input type = "date" name = "data" placeholder = "data de validade" require >

        <button type = " submit" > Enviar </button>
    </form>
    
</body>
</html>