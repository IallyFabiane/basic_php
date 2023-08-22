<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número Real</h1>
        <?php 
            $real = (float) $_GET['real'];
            $inteiro = intval($real);
            $fracao = $real - $inteiro;
            echo "<p>Analisando o número <strong>$real</strong> informado pelo usuário</p>";
            echo "<ul><li>A parte inteira do número é $inteiro</li></ul>";
            echo "<ul><li>A parte fracionária do número é $fracao</li></ul>";
        ?>
        <button type="submit"><a href="javascript:history.back()">&#x2B05; Voltar</a></button>
    </main>
</body>
</html>