<?php 
    class ManipulaArquivo {
        public $caminho_arquivo;
        public $arquivo;
        public function __construct($caminho_arquivo) {
            $this->caminho_arquivo = $caminho_arquivo;
            $this->arquivo = fopen($caminho_arquivo, 'w+');
        }

        public function escrever($string) {
            fwrite($this->arquivo, $string . PHP_EOL);
        }

        public function ler() {
            fseek($this->arquivo, 0); //colocando o cursor no início do arquivo
            return fread($this->arquivo , filesize($this->caminho_arquivo));
        }
        
        public function __destruct() {
            fclose($this->arquivo);
            echo "{$this->caminho_arquivo} foi fechado.\n";
            unlink($this->caminho_arquivo);
            echo "{$this->caminho_arquivo} foi excluído.";
        }
    }
?>