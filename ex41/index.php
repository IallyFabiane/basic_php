<?php 
    require_once 'ManipulaArquivo.php';
    $obj = new ManipulaArquivo('abc.txt');
    $obj->escrever('a1');
    echo $obj->ler();
?>