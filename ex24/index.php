<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
        $p1 = $_GET['p1'] ?? 0;
        $p2 = $_GET['p2'] ?? 0;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" step="0.01">
            <label for="v2">1º Peso</label>
            <input type="number" name="p1" id="p1" step="0.01">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" step="0.01">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" step="0.01">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h1>Cálculo das Médias</h1>
        <?php 
            $mediaSimples = ($v1 + $v2)/ 2;
            $mediaPonderada = (($v1 * $p1)+ ($v2 * $p2))/ $p1 + $p2;
            echo "<p>Analisando os valores $v1 e $v2:</p>";
            echo "<ul>";
            echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $mediaSimples.</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> entre os valores é igual a $mediaPonderada.</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>