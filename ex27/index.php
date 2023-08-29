<?php 
   $comida = 'bolo';

   $valor_de_retorno = match ($comida) {
       'apple' => 'Essa comida é uma maçã.',
       'bar' => 'Essa comida é um bar.',
       'bolo' => 'Essa comida é um bolo.',
   };

   echo $valor_de_retorno;
?>