<?php 
    if (session_status() !== PHP_SESSION_ACTIVE) session_start(); //SE NENHUMA SESSÃO ESTIVER ATIVA, INICIA UMA SESSÃO
   // Acesse o valor do cookie de sessão genérico
    $sessionId = $_COOKIE['PHPSESSID'];
    echo $_SESSION['cor'] . "<br>" . $_SESSION['carro'] . "<br>" . session_id(); 
?>