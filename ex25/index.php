<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoNascimento = $_GET['anoNascimento'] ?? 0;
        $anoInformado = $_GET['anoInformado'] ?? 0;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" value="<?= $anoNascimento?>">
            <label for="anoInformado">Quer saber a sua idade em que ano? (Atualmente estamos em <strong><?= date('Y')?></strong>)</label>
            <input type="number" name="anoInformado" id="anoInformado"value="<?= $anoInformado ?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h1>Resultado</h1>
        <?php 
            $idade = ($anoInformado - $anoNascimento);
            echo "<p>Quem nasceu em $anoNascimento vai ter <strong>$idade</strong> anos em $anoInformado.</p>";
        ?>
    </section>
</body>
</html>