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
            $real = $_GET['moeda'];
            $dolar = $real / 4.9;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $cotacaoReal = numfmt_format_currency($padrao, $real, "BRL");
            $cotacaoDolar = numfmt_format_currency($padrao, $dolar, "USD");
            echo "<p>Seus R$ $cotacaoReal equivalem a <strong>$cotacaoDolar dólares.</strong></p>";
            echo "<p><small>*Cotação fixa de R$ 4.90.</small></p>";
        ?>  
        <button type="submit"><a href="javascript:history.back()">&#x2B05; Voltar</a></button>
    </main>
</body>
</html>