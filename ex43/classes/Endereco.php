<?php 
    class Endereco {
        private $cidade;
        private $estado;

        public function __construct(string $cidade, string $estado){
            $this->cidade =$cidade;
            $this->estado = $estado;
        }

        public function getCidadeEstado() {
            return "{$this->cidade}/{$this->estado}";
        }

    }
?>