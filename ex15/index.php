<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <p>O valor gerado foi <strong><?php echo $random = rand(0, 100);?></strong>.</p>
        <button type="submit"><a href="javascript:history.go(0)">&#128259; Gerar outro</a></button>
    </section>
</body>
</html>