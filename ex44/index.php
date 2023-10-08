<?php 
    declare(strict_types = 1);

    require_once 'classes/CarrinhoInterface.php';
    require_once 'classes/Carrinho.php';
    require_once 'classes/Produto.php';
    require_once 'classes/Servicos.php';

    $produto1 = new Produto('camiseta', 50.00);
    $produto2 = new Produto('caneca', 20.00);

    $carrinho = new Carrinho();
    $carrinho->addProduto($produto1);
    $carrinho->addProduto($produto2);
    $servico = new Servicos('Consultorias de TI', 600.00);

    print_r($carrinho);

    foreach ($carrinho->getProdutos() as $produto) {
        echo $produto->getNome();
        echo " ";
        echo $produto->getPreco();
        echo PHP_EOL;
    }
?>