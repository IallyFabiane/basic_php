<?php 
    class ContaPoupanca extends Conta {
        public function sacar(float $valor): void {
            if($this->saldo < $valor){
                echo "Saldo insuficiente.\n";
                $this->detalhes();
                return;
            }

            $this->saldo -= $valor;
            $this->detalhes();
        }
    }
?>