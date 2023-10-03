<?php 
    declare(strict_types = 1); //o php interpreta exatamente a tipagem descrita
    require_once 'classes/Escritor.php';
    require_once 'classes/Caneta.php';
    $escritor = new Escritor('Ially');
    $caneta = new Caneta('pentel');
    echo $escritor->getNome() . PHP_EOL;
    echo $caneta->getNome() . PHP_EOL;
    $escritor->setCaneta($caneta);
    $escritor->getCaneta()->escrever(); //associando uma classe a outra
    //print_r($escritor);
?>