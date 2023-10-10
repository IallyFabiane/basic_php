<?php 
    abstract class Conta {
        protected $agencia, $conta, $saldo;

        public function __construct (int $agencia, int $conta, float $saldo) {
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->saldo = $saldo;
        }

        public function detalhes(): void {
            echo "AGÊNCIA {$this->agencia}\n";
            echo "CONTA {$this->conta}\n";
            echo "SALDO {$this->saldo}\n";
        }

        public function depositar(float $valor) {
            $this->saldo += $valor;
            $this->detalhes();
        }

        abstract public function sacar(float $valor) : void;
    }
?>