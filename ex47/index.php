<?php 
    declare(strict_types = 1);
    require_once 'classes/Conta.php';
    require_once 'classes/ContaCorrente.php';
    require_once 'classes/ContaPoupanca.php';

    $contaCorrente = new ContaCorrente(1111, 2212, 20, 100);
    $contaPoupanca = new ContaPoupanca(1111, 2222, 30);
    $contaPoupanca->sacar(20);
    echo "#################################################\n";
    $contaPoupanca->depositar(20);
    $contaCorrente->sacar(20);
?>