<?php 
    $str = "\nisso é uma string   \nlinha2<br>";
    $str2 = "|";
    $str3 = "D'Avila<br>";
    $str4 = "dominio.com.br\n/pasta\n/index.html<br>";
    echo nl2br(trim($str)); //troca \n por uma tag <br> e remove os espaços em branco;
    echo strtoupper($str); //escreve em maiúsculo;
    echo strtolower($str); //escreve tudo em minúsculo;
    echo ucfirst($str); //escreve apenas  a primeira letra maiúscula;
    echo ucwords($str); //escreve apenas as primeiras letras maiúsculas das palavras;
    echo addslashes($str3); //coloca um caracter de escape;
    echo stripslashes($str3); // remove os caracteres de escape;
    $array_dominio = explode("/", $str4); //dividiu a string com a barra como separador;
    print_r($array_dominio);
    list($dominio, $pasta, $arquivo) = explode ("/", $str4); // dividiu a string em pedaços específicos previamente nomeados;
    echo $dominio;
    echo $pasta;
    echo $arquivo;
    $arr = array("Ially", "Fabiane", "da", "Silva"); //junta os elementos de um array com a vírgula como delimitador;
    echo implode(", ", $arr);
    echo "<br>";
    echo substr($str3, 1, 2); //retorna uma parte da string;
    echo "<br>";
    echo strcmp($str, $str2); //comparação de strings; -1 -> 1 é menor que 2, 0 -> 1 é igual a 2 e 1-> 2 é maior que 1
    echo "<br>";
    echo strcasecmp($str, $str2); //comparação de strings sem ser case sensitive;
    echo "<br>";
    echo strlen($str); //retorna o tamanho de uma string;
    echo strstr($str4, "."); //procura por uma string dentro de outra string;
    echo stristr($str4, "."); //procura por uma string dentro de outra string sem ser case sensitive;
    echo strpos($str4, "."); //posição que aparece o caractere procurado;
?>