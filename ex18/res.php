<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            //Cotação do BCB
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y"); //data atual
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\''. $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; //em aspas simples, para não ocorrer interpolação
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            echo "<p>A cotação foi de $cotacao.</p>";

            $real = $_GET['moeda'];
            $dolar = $real / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $cotacaoReal = numfmt_format_currency($padrao, $real, "BRL");
            $cotacaoDolar = numfmt_format_currency($padrao, $dolar, "USD");
            echo "<p>Seus R$ $cotacaoReal equivalem a <strong>$cotacaoDolar dólares.</strong></p>";
            echo "<p><small>*Cotação diária de acordo com O Banco Central do Brasil.</small></p>";
        ?>  
        <button type="submit"><a href="javascript:history.back()">&#x2B05; Voltar</a></button>
    </main>
</body>
</html>