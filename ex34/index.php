<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Upload de Arquivos</h1>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo[]" id="arquivo" multiple><br>
            <input type="submit" value="Enviar" name="enviar-formulario">
        </form>
    </main>
    <?php 
        if(isset($_POST['enviar-formulario'])) {
            $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
            $quantidadeDeArquivos = count($_FILES['arquivo']['name']); //contando quantos arquivos temos
            $contador = 0;
            while($contador < $quantidadeDeArquivos) {
                $extensao = pathinfo($_FILES['arquivo']['name'][$contador],PATHINFO_EXTENSION);
                echo $extensao;
                if(in_array($extensao, $formatosPermitidos)) {
                    $pasta = "arquivos/";
                    $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                    $rename = uniqid() . ".$extensao"; //gerando um novo nome para o arquivo
                    echo "<p>Extensão permitida</p><br>";
                
                    if(move_uploaded_file($temporario, $pasta.$rename)) {
                        $mensagem = "<p>Upload feito com sucesso!</p><br>";
                    } else {
                        $mensagem = "<p>Erro. Não foi possível fazer o upload do arquivo</p><br>";
                    }
                } else {
                    $mensagem = "<p>Formato inválido</p><br>";
                };
                echo $mensagem;
                $contador = $contador + 1;
            };
        };
       
        "<pre>" . var_dump($_FILES). "</pre>";
    ?>
</body>
</html> 