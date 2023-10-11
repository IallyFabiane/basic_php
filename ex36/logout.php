<?php 
    session_start(); //iniciando a sessão
    session_unset(); //limpando a sessão OU $_SESSION = array();
    session_destroy(); //finalizando a sessão, pra deslogar o usuário, antes de usar o destroy temos que usar o unset
?>