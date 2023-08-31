<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundosInformados = $_GET['segundos'] ?? 0;
        $sobra = $segundosInformados;
        $semanas = (int) ($sobra / 604800);
        $sobra = ($sobra % 604800);
        $dias = (int) ($sobra / 86400);
        $sobra = ($sobra % 86400);
        $horas = (int) ($sobra / 3600);
        $sobra = ($sobra % 3600);
        $minutos = (int) ($sobra / 60);
        $sobra = ($sobra % 60);
        $segundos = $sobra;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?= $segundosInformados?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
     <h1>Totalizando tudo</h1>
     <?php 
        echo "<p>Analisando o valor que você digitou,<strong>$segundosInformados segundos</strong> equivalem a um total de:</p>";
        echo "<ul>";
        echo "<li>$semanas semanas</li>";
        echo "<li>$dias dias</li>";
        echo "<li>$horas horas</li>";
        echo "<li>$minutos minutos</li>";
        echo "<li>$segundos segundos</li>";
        echo "</ul>";
     ?>
    </section>
</body>
</html>