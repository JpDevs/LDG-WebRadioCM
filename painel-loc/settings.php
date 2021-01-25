<!DOCTYPE html>
<?php
require_once("authcookie.php");
require_once("cfg.php");
require_once("../includes/functions.php");
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Principal</title>
        <link rel="stylesheet" href="./front/css/main.css">
    </head>
    <body style="background: url(../img/bg.png);">
        <!--MENU-->
        <div id="sideBar">
            <center><img src="../img/logo.png" alt=""></center>

            <a href="./main.php">Início</a>
            <a href="./settings.php">Alterar Senha</a>
            <a href="./logout.php">Sair</a>
        </div>
        <!--PRINCIPAL-->
        <main>
            <h1>Alterar Senha</h1>
            <hr>

            <!--TABELA DE PEDIDOS-->
         <center> <form method="POST" action="change.php">
         <div class="labelInput">
              <label>Senha</label>
              <br/>
              <input type="password" name="senha">
              <br/>
              <button type="submit" name="alterar">Alterar</button>
</form>
</center>

        </main>
    </body>
</html>