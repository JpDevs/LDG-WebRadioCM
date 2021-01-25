<!DOCTYPE html>
<?php
require('cfg.php');
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="./front/css/login.css">
    </head>
    <body style="background: url(../img/bg.png) no-repeat;">
        <div id="app">
            <form action="auth.php" method="POST">
                <h1>LOGIN</h1>
                <input type="text" name="login"  placeholder="Usuário">
                <input type="password" name="senha"  placeholder="Senha">
                <input type="submit" name="entrar" value="entrar" value="login">
            </form>
        </div>
    </body>
</html>