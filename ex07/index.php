<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertendo bases numéricas</title>
</head>
<body>
    <h1>Convertendo bases numéricas</h1>
    <?php 
        $resultado = base_convert(254, 10, 8);
        echo $resultado;
    ?>
</body>
</html>