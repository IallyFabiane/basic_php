<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" step="0.01">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h1>Resultado Final</h1>
        <?php 
            $raizQuadrada = sqrt($numero);
            $raizCúbica = $numero ** (1/3);
            print "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
            print "<ul>";
            print "<li>A sua raiz quadrada é <strong>$raizQuadrada</strong></li>";
            print "<li>A sua raiz cúbica é <strong>$raizCúbica</strong></li>";
            print "</ul>";
        ?>
    </section>
</body>
</html>