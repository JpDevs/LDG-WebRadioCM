<!DOCTYPE html>
<?php
require('cfg2.php');
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
                <input type="text" name="User" placeholder="Usuário">
                <input type="password" name="Pass" placeholder="Senha">
                <input type="submit" name="entrar" value="login">
            </form>
        </div>
    </body>
</html>