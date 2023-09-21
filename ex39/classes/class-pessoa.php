<?php 
    class Pessoa {
        public $nome;
        public $idade;

        private $falando = false;
        public $estudando = false;

        public function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }
        
        public function falar($assunto) {
            if($this->falando) {
                echo "{$this->nome} já está falando.\n";
                return;
            }
            echo "{$this->nome} está falando sobre $assunto.";
            $this->falando =- true;
        }

        public function parar_falar() {
            if(!$this->falando) {
                echo "{$this->nome} não está falando.\n";
                return;
            } else {
                echo "{$this->nome} parou de falar.\n";
                $this->falando = false;
            }
        }
    }
?>