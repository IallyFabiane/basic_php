<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Tipos Primitivos</h1>
    <?php 
        $num = 300;
        echo $num . "<br>";
        $num2 = 0x1A; //Ox= hexadecimal; 0b = binário; 0 = octal;
        echo $num2. "<br>";

        $v = (int) "300"; //coerção
        var_dump($v); // informações sobre a variável

        $vet = [1, 2, 3];
        var_dump($vet);
    ?>
</body>
</html>