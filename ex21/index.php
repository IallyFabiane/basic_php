<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['dividendo'] ?? 0;
        $valor2 = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" min="0" id="dividendo" value="<?= $valor1 ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" min="1" id="divisor" value="<?= $valor2 ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        <?php 
            $quociente = intdiv($valor1, $valor2);
            $resto = $valor1 % $valor2;
            echo "<ul>";
            echo "<li>O dividendo é <strong>$valor1</strong>.</li>";
            echo "<li>O divisor é <strong>$valor2</strong>.</li>";
            echo "<li>O quociente é <strong>$quociente</strong>.</li>";
            echo "<li>O resto é <strong>$resto</strong>.</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>