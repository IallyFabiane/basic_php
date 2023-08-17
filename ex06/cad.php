<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_REQUEST) junção de $_GET, $_POST e $_COOKIES
            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            echo "É um prazer te conhecer, $nome $sobrenome!";
        ?>
        <p><a href="javascript:history.go(-1)">&#x2B05; Voltar para apágina anterior</a></p>
    </main>
</body>
</html>