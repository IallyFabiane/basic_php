<?php 

    class Servicos implements CarrinhoInterface {
        private $nome;
        private $valor;

        public function __construct(string $nome, float $valor) {
            $this->nome = $nome;
            $this->valor = $valor;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function getPreco(): float {
            return $this->valor;
        }
    }
?>