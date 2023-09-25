<?php 
    class Produto {
       public $id;
       public $nome;
       public $preco;
       private $estoque;

       public function getEstoque() { //getter para exibir a  propriedade private
            return $this->estoque;
       }

       public function setEstoque($valor) { //setter para configurarum valor de uma propriuedade private
           if(!is_numeric($valor)) {
                echo "Valor do estoque deve ser um número";
           }
            return $this->estoque = $valor;
        }

       public function aumentaEstoque($quantidade) {
            $novoEstoque = $this->estoque + $quantidade;
            $this->setEstoque($novoEstoque);
       }

       
       public function aumentaPreco($percentual) {
            $this->preco = $this->preco + ($this->preco * ($percentual / 100));
       }

    }
?>