<?php 
    declare(strict_types = 1);
    require_once 'classes/Cliente.php';
    require_once 'classes/Endereco.php';

    $cliente1 = new Cliente('Ially');
    $cliente1->setEndereco('Recife', 'PE');
    $cliente1->setEndereco('SÃO PAULO', 'SP');
    echo $cliente1->getNome() . PHP_EOL;
    echo $cliente1->showEndereco() . PHP_EOL;
?>