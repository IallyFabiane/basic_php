<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $moeda = $_GET['moeda'];
            $dolar = $moeda / 4.9;
            echo "<p>Seus R$ $moeda equivalem a <strong>$dolar U$ dólares.</strong></p>";
            echo "<p><small>*Cotação fixa de R$ 4.90.</small></p>";
        ?>  
        <button type="submit"><a href="javascript:history.back()">&#x2B05; Voltar</a></button>
    </main>
</body>
</html>