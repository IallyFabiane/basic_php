<?php 
    for ($i=0; $i < 10; $i++) { 
        echo "1 x $i = " .($i * 1) ."<br>";
    }

    $cores = array("pink", "white", "blue", "purple"); 

    foreach ($cores as $indice => $valor) {
        echo $indice . "-" . $valor . "<br>";
    }
?>