<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Nowdoc</title>
</head>
<body>
    <h1>Sintaxe Nowdoc</h1>
    <?php 
        $ano = date('Y');
        $texto = <<< 'TEXTO'
            Estou aprendendo PHP em $ano.
        TEXTO;
        echo $texto;
    ?>
</body>
</html>