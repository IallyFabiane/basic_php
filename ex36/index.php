<?php 
    session_start(); //iniciando a sessão
    $_SESSION['cor'] = "Pink";
    $_SESSION['carro'] = "BMW";

    echo $_SESSION['cor'] . "<br>" . $_SESSION['carro'] . "<br>" . session_id(); 
?>