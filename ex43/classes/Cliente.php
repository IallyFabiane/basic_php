<?php 
    class Cliente {
        private $nome;
        private $endereco = [];

        public function __construct(string $nome){
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setEndereco(string $cidade, string $estado) {
            $this->endereco[] = new Endereco($cidade, $estado); //composição de classes
        }

        public function showEndereco() {
            foreach ($this->endereco as $key => $value) {
                echo "Endereço: $key: {$value->getCidadeEstado()}\n";
            }
        }
    }
?>