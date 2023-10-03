<?php 
    class Escritor {
        private $nome;
        private $caneta; //Associação entre classes

        public function __construct(string $nome){
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getCaneta() {
            return $this->caneta;
        }

        public function setCaneta(Caneta $caneta) {
            $this->caneta = $caneta;
        }
    }
?>