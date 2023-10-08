<?php 
    class Carrinho {
        private $produtos = [];

        public function addProduto(Produto $produto): void {
            $this->produtos[] = $produto;
        }

        public function getProdutos(): array {
            return $this->produtos;
        }
    }
?>