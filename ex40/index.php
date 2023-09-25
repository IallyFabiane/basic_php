<?php 
    require_once 'Produto.php';

    $camiseta = new Produto();
    $camiseta->id = 1;
    $camiseta->nome = "t-shirt 1";
    $camiseta->preco = 50;
    $camiseta->aumentaPreco(100);
    $camiseta->setEstoque(3);
    $camiseta->aumentaEstoque(24);
    echo $camiseta->getEstoque() . PHP_EOL;
    echo $camiseta->preco;
?>