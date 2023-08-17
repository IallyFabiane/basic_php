<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Heredoc</title>
</head>
<body>
    <h1>Sintaxe Heredoc</h1>
    <?php 
       $texto = <<< TEXTO
        Primeiros passos em PHP  \u{1F418}.
        TEXTO; 
        echo $texto;
    ?>
</body>
</html>