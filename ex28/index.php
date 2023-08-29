<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $precoFormatado = number_format($preco, 2, ",", ".");
        $reajuste = $_GET['reajuste'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?= $precoFormatado ?>" step="0.01">
            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p"></span>%</strong>)</label>
            <input type="range" min="0" max="100" name="reajuste" id="reajuste" step="0.01" value="<?= $reajuste?>" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section id="resultado">
        <h1>Resultado do Reajuste</h1>
        <?php 
            $precoReajustado = ($preco * $reajuste / 100 )+ $preco;
            $precoReajustadoFormatado = number_format($precoReajustado, 2, ",", ".");
            echo "<p>O produto que custava R$ $preco, com <strong>$reajuste % de aumento</strong>, vai passar a custar <strong>R$ $precoReajustadoFormatado </strong> a partir de agora.</p>";
        ?>
    </section>
    <script>
        function mudaValor() {
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>