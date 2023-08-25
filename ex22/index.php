<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 0;
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        $salarioFormatado = numfmt_format_currency($padrao, $salario, "BRL");
        $salarioMinimo = 1380;
    ?>
    <main>
        <h1>Informe seu salário:</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário:</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?= $salario ?>">
            <p>Considerando o salário mínimo de <strong> R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h1>Resultado Final</h1>
        <?php 
            $montante = intdiv($salario, $salarioMinimo);
            $adicional = $salario % $salarioMinimo;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $adicionalFormatado = numfmt_format_currency($padrao, $adicional, "BRL");
            echo "<p>Quem recebe um salário de $salarioFormatado ganha <strong>$montante salários mínimos</strong> + $adicionalFormatado.</p>";
        ?>
    </section>
</body>
</html>