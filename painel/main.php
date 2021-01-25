<?php
require('cfg.php');
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

            <form action="change.php" method="POST">
                <div id="configRadio" class="container">
                    <h3>Configurações da Rádio</h3>
                    <hr>
                    <div class="labelInput">
                        <label for="linkPainelCentova">Link do Painel CentovaCast:</label><br/>
                        <input type="link" name="pCentova" id="linkPainelCentova" value="<?php while($linkcc = $conccurl->fetch_assoc()){ echo $linkcc["centova_url"];}?>">
                    </div>

                    <div class="labelInput">
                        <label for="loginCentova">Login CentovaCast:</label><br/>
                        <input type="text" name="lCentova" id="loginCentova" value="<?php while($logincc = $concclogin->fetch_assoc()){ echo $logincc["centova_login"];} ?>";>
                    </div>

                    <div class="labelInput">
                        <label for="lkCentova">Link do Shoutcast: <small>(Incluir ";" ao final do link.)</small></label><br/>
                        <input type="link" name="lkCentova" id="lkCentova" value="<?php while($linksc = $consc->fetch_assoc()){ echo $linksc["shoutcast_url"];}?>">
                    </div>
                </div>

                <div id="configSite" class="container">
                    <h3>Configurações do Site</h3>
                    <hr>
                    <div class="labelInput">
                        <label for="nomeSite">Nome do Site:</label><br/>
                        <input type="text" name="nSite" id="nomeSite" value="<?php while($nsitenome = $contitulo->fetch_assoc()){ echo $nsitenome["titulo"];}?>">
                    </div>

                    <div class="labelInput">
                        <label for="logoSite">Link da logotipo: <small>(extenção .png - 500px x 500px)</small></label><br/>
                        <input type="link" name="lLogo" id="logoSite" value="<?php while($linklogo = $conlogo->fetch_assoc()){ echo $linklogo["logo"];}?>">
                    </div>

                    <div class="labelInput">
                        <label for="bgSite">Link do Background:</label><br/>
                        <input type="link" name="lBg" id="bgSite" value="<?php while($linkbh = $conbg->fetch_assoc()){ echo $linkbh["background"];}?>">
                    </div>
                </div>

                <div id="Carrossel" class="container">
                    <h3>Banners</h3>
                    <hr>
                    <div class="labelInput">
                        <label for="banner1">Link Banner 01: <small>(560 x 460)</small></label><br/>
                        <input type="link" name="1br" id="banner1" value="<?php while($mostrabanner = $conimg1->fetch_assoc()){ echo $mostrabanner["Img_URL"];}?>">
                    </div>

                    <div class="labelInput">
                        <label for="banner2">Link Banner 02: <small>(560 x 460)</small></label><br/>
                        <input type="link" name="2br" id="banner2" value="<?php while($mostrabanner2 = $conimg2->fetch_assoc()){ echo $mostrabanner2["Img_URL"];}?>">
                    </div>
                </div>

                <div id="Twitter" class="container">
                    <h3>Twitter</h3>
                    <hr>
                    <div class="labelInput">
                        <label for="nomeTwitter">Sua conta no twitter: <small>(Sem o @)</small></label><br/>
                        <input type="link" name="nTT" id="nomeTwitter" value="<?php while($tt = $contt->fetch_assoc()){ echo $tt["Twitter"];}?>">
                    </div>
                </div>

                <button type="submit">Enviar</button>
            </form>
        </main>
    </body>
</html>