<?php 
    readonly class PessoaReadonly {
      public string $nome;
      public function __construct($nome) {
        $this->nome = $nome;
     }
     public function escreverNome() {
        return $this->nome;
     }
    }
    
?>