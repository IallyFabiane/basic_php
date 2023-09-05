<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulário retroalimentado
        $v1 = $_GET['v1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
        if (isset($_GET['enviar-formulario'])) : //isset: determina se uma variável é declarada e se é diferente  de NULL
            echo "<p>Formulário Enviado</p>";
            $erros = array();
            if (!$v1 = filter_input(INPUT_GET, 'v1', FILTER_VALIDATE_INT)) {
                $erros[] = "Valor 1 precisa ser um número inteiro";
            };

            if (!$v2 = filter_input(INPUT_GET, 'v2', FILTER_VALIDATE_INT)) {
                $erros[] = "Valor 2 precisa ser um número inteiro";
            }
            if(!empty($erros)) {
                foreach($erros as $erro) {
                    echo "<li>$erro</li>";
                }
            } else {
                echo "<p>Parabéns seus dados estão corretos!</p>";
            }
        endif;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $v1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2"  value="<?= $v2 ?>">
            <input type="submit" name="enviar-formulario" value="Somar">
        </form>
    </main>
    <section id="resultado">
            <h2>Resultado</h2>
            <?php
                $soma = $v1 + $v2;
                print "<p>A soma entre os valores $v1 e $v2 é <strong>$soma</strong>.</p>";
            ?>
    </section>
</body>
</html>