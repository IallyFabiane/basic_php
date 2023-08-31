<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Simulador de Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" value="<?= $valor?>" required>
            <span><sup>*</sup><small>Todas as notas estão disponíveis</small></span>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
        <h1>Saque de R$<?= number_format($valor, 2, ",", ".")?> realizado</h1>
        <?php 
            $sobra = $valor;
            $fator1 =(int) ($sobra / 200);
            $sobra = $sobra % 200;
            $fator2 = (int) ($sobra / 100);
            $sobra = $sobra % 100;
            $fator3 =(int) ($sobra / 50);
            $sobra = $sobra % 50;
            $fator4 = (int) ($sobra / 20);
            $sobra = $sobra % 20;
            $fator5 =(int) ($sobra / 10);
            $sobra = $sobra % 10;
            $fator6 = (int) ($sobra / 5);
            $sobra = $sobra % 5;
            $fator7 = (int) ($sobra / 2);
            $sobra = $sobra % 2;
        ?>
        
    <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
    <ul>
        <li><img src="img/oip.jpg" class="nota"><span> x <?=$fator1?></span></li>

        <li><img src="img/100_reais.jpg" class="nota"><span> x <?=$fator2?></span></li>

        <li><img src="img/50_reais.jpg" class="nota"><span> x <?=$fator3?></span></li>

        <li><img src="img/20_reais.jpg" class="nota"><span> x <?=$fator4?></span></li>

        <li><img src="img/10_reais.jpg" class="nota"><span> x <?=$fator5?></span></li>

        <li><img src="img/5_reais.jpg" class="nota"><span> x <?=$fator6?></span></li>

        <li><img src="img/2_reais.jpg" class="nota"><span> x <?=$fator7?></span></li>

    </ul>
    </section>
</body>
</html>