<?php 
    class Caneta {
        private $nome;

        public function __construct(string $nome){
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function escrever() {
            echo "Caneta {$this->nome} está escrevendo.";
        }
    }
?>