<?php 
    declare(strict_types = 1);

    interface MinhaInterface { // especifica quais os métodos serão obrigatórios na classe que a implementar
        public const CONST = "\nvalor";
        public function metodo();
    }

    class Classe implements MinhaInterface {
        public function metodo() {
            echo "Método implementado";
        }
    }
    $classe = new Classe();
    $classe->metodo();
    echo $classe::CONST;
?>