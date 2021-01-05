<?php
require('../includes/config.php');
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
            <a href="./ajustes.php">Configurações</a>
            <a href="./logout.php">Sair</a>
        </div>
        <!--PRINCIPAL-->
        <main>
            <h1>PAINEL</h1>
            <hr>

            <form action="" method="post">
                <div id="configRadio" class="container">
                    <h3>Configurações da Rádio</h3>
                    <hr>
                    <div class="labelInput">
                        <label for="linkPainelCentova">Link do Painel CentovaCast:</label><br/>
                        <input type="link" name="pCentova" id="linkPainelCentova" placeholder="">
                    </div>

                    <div class="labelInput">
                        <label for="loginCentova">Login CentovaCast:</label><br/>
                        <input type="text" name="lCentova" id="loginCentova" placeholder="">
                    </div>

                    <div class="labelInput">
                        <label for="lkCentova">Link do Shoutcast: <small>(Incluir ";" ao final do link.)</small></label><br/>
                        <input type="link" name="lkCentova" id="lkCentova" placeholder="">
                    </div>
                </div>

                <div id="configSite" class="container">
                    <h3>Configurações do Site</h3>
                    <hr>
                    <div class="labelInput">
                        <label for="nomeSite">Nome do Site:</label><br/>
                        <input type="text" name="nSite" id="nomeSite" placeholder="">
                    </div>

                    <div class="labelInput">
                        <label for="logoSite">Link da logotipo: <small>(extenção .png - 500px x 500px)</small></label><br/>
                        <input type="link" name="lLogo" id="logoSite" placeholder="">
                    </div>

                    <div class="labelInput">
                        <label for="bgSite">Link do Background:</label><br/>
                        <input type="link" name="lBg" id="bgSite" placeholder="">
                    </div>
                </div>

                <div id="Carrossel" class="container">
                    <h3>Banners</h3>
                    <hr>
                    <div class="labelInput">
                        <label for="banner1">Link Banner 01: <small>(560 x 460)</small></label><br/>
                        <input type="link" name="1br" id="banner1" placeholder="">
                    </div>

                    <div class="labelInput">
                        <label for="banner2">Link Banner 02: <small>(560 x 460)</small></label><br/>
                        <input type="link" name="2br" id="banner2" placeholder="">
                    </div>
                </div>

                <div id="Twitter" class="container">
                    <h3>Twitter</h3>
                    <hr>
                    <div class="labelInput">
                        <label for="nomeTwitter">Sua conta no twitter: <small>(Sem o @)</small></label><br/>
                        <input type="link" name="nTT" id="nomeTwitter" placeholder="">
                    </div>
                </div>

                <button type="submit">Enviar</button>
            </form>
        </main>
    </body>
</html>