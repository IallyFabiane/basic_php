<?php 
    if(isset($_POST['btn-entrar'])) {
        echo "Botão clicado";
    };
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Login</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="login">Login</label>
            <input type="text" name="login" id="login">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <button name="btn-entrar" type="submit">Entrar</button>
        </form>
    </main>
</body>
</html>