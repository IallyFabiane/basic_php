<?php 
    declare(strict_types = 1);

    require_once 'classes/Veiculo.php';
    require_once 'classes/Carro.php';

    $carro1 = new Carro('carro', 'bmw', 5);
    echo "O veículo " . $carro1->getNome() . " suporta " . $carro1->getPassageiros() . " passageiros.\n";
    $carro1->acelerar();
?>