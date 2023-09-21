<?php 
    require_once "classes/class-pessoa.php";
    $pessoa1 = new Pessoa("Ially", 29); //parêntese vazios, pois a classe não possui um construtor
    $pessoa2 = new Pessoa("Wagner", 35);
    echo $pessoa1->nome . PHP_EOL; //PARA PULAR UMA LINHA NO TERMINAL
    echo $pessoa2->nome . PHP_EOL;
    $pessoa1->falar("POO");
    $pessoa1->falar("Php");
    $pessoa1->parar_falar();
?>