<?php 
    //Conexão com o Banco de Dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "sistema-login";

    $connect =  mysqli_connect($servername, $username, $password, $db_name); //função de conexão com o db
    if(mysqli_connect_error()) {
        echo "<p>Falha na conexão</p>" . mysqli_connect_error();
    };
?>