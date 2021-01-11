<?php
require('../includes/config.php');
require('../includes/functions.php');
require('authcookie.php');
?>
<!DOCTYPE html>
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
            <a href="./cadastrarloc.php">Cadastrar Loc.</a>
            <a href="./vagas.php">Vagas</a>
            <a href="./ajustes.php">Configurações</a>
            <a href="./logout.php">Sair</a>
        </div>
        <!--PRINCIPAL-->
        <main>
            <h1>PAINEL</h1>
            <hr>

            <form action="cadastralocutor.php" method="post">
                <div id="configRadio" class="container">
                    <h3>Cadastrar Locutor</h3>
                    <hr>
                    <div class="labelInput">
                        <label for="linkPainelCentova">Nome:</label><br/>
                        <input type="link" name="nome" id="locname" placeholder="">
                    </div>

                    <div class="labelInput">
                        <label for="loginCentova">Senha:</label><br/>
                        <input type="password" name="senha" id="locpass" placeholder="">
                    </div>
                </div>

                <button type="submit">Enviar</button>
            </form>
        </main>
    </body>
</html>