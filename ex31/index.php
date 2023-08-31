<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura de arquivos</title>
</head>
<body>
    <?php 
        $fp =  fopen( dirname(__FILE__) . "/README.md", "r");
        $fw =  fopen( dirname(__FILE__) . "/README.md", "w");
        $txt = "Olá, mundo!";
        fwrite($fw, $txt);
        while(!feof($fp)) {
            $linha = fgets($fp);
            echo $linha . "<br/>";
        };

        fclose($fp);
        fclose($fw);
    ?>
</body>
</html>