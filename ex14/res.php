<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado Final</h1>
    <main>
        <?php 
            $num = $_GET['num'];
            $antecessor = $num - 1;
            $sucessor =  $num + 1;
            echo "<p>O número escolhido foi <strong>$num</strong>.</p>";
            echo "<p>O seu antecessor é <strong>$antecessor</strong>.</p>";
            echo "<p>O seu sucessor é <strong>$sucessor</strong>.</p>";
        ?>
        <button type="submit"><a href="javascript:history.back()">&#x2B05; Voltar</a></button>
     </main>
</body>
</html>