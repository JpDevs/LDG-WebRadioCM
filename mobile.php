<?php
require('includes/config.php');
require('includes/functions.php');
$centovalogin = $concclogin->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php while($exibetitulo1 = $contitulo->fetch_array()){ echo $exibetitulo1["titulo"]; }?></title>
        <meta name="description" content="Diversão em qualquer lugar a qualquer hora">
        <meta name="keywords" content="Web rádio, Rádio Level, Radio Level, Rádio">
        <link rel="stylesheet" href="./css/inputs.css">
        <link rel="stylesheet" href="./css/mobile.css">
        <link rel="stylesheet" href="./css/modals.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body style="background: var(--cor-primaria) url('<?php while($showbg = $conbg->fetch_assoc()){ echo $showbg["background"];} ?>') no-repeat;">
    <img id="mobileLogo" src="<?php while($exibelogo = $conlogo->fetch_assoc()){ echo $exibelogo["logo"];}?>" alt="Rádio Level">
        <div id="containerPlayerMobile">
                        <!--includes/streaming.php-->
            <audio src="includes/streaming.php"></audio>
            <div id="textInfoMobile">
                <center><img class="cc_streaminfo" data-type="trackimageurl" data-username="<?php while($exibelogin = $concclogin2->fetch_array()){echo $exibelogin["centova_login"]; ?>" /></center>
                <center><div id="textBoxMobile">
                    <span class="cc_streaminfo" data-type="title" data-username="<?php echo $exibelogin["centova_login"]; ?>"></span>
                    <a href="#" class="cc_streaminfo" data-type="song" data-username="<?php echo $exibelogin["centova_login"]; } ?>">Carregando ...</a>
                </div></center>
            </div>

            <center><div id="audioButtonsMobile">
                <button id="diminuirVolMob" onclick="document.querySelector('audio').volume-=0.1"><img id="imgDV" src="./img/icons/svg/reduza-o-volume.svg"></button>
                <button id="buttonPPMob"><img id="imgPPMob" src="./img/icons/svg/botao-play.svg"></button>
                <button id="aumentarVolMob" onclick="document.querySelector('audio').volume+=0.1"><img id="imgAV" src="./img/icons/svg/aumentar-o-volume.svg"></button>
            </div></center>
        </div>

        <div id="buttonModal">
            <button id="vagas">VAGAS</button><br/>
            <button id="pedidos">FAZER PEDIDO</button>
        </div>

            <!--Modal's-->
            <div id="modalPedidos" class="modalContainer">
                <div class="modal l-form">
                    <button id="btnFechar">X</button>
                    <h1 class="form_title">PEDIDOS</h1>
                    <form action="song-request.php" method="POST">
                        <div class="form_div">
                            <input type="text" class="form_input" placeholder="Digite seu nome aqui." name="nomePedidos">
                        </div>

                        <div class="form_div">
                            <input type="email" class="form_input" placeholder="Digite seu email aqui." name="emailPedidos">
                        </div>

                        <div class="form_div">
                            <input type="textarea" class="form_input" placeholder="Peça sua música." name="musicaPedidos">
                        </div>

                        <button type="submit" class="form_button">Enviar</button>
                    </form>
                </div>
            </div>

            <div id="modalVagas" class="modalContainer">
                <div class="modal l-form">
                    <button id="btnFechar">X</button>
                    <h1 class="form_title">VAGAS ABERTAS</h1>
                    <form action="vaga-request.php" method="POST">
                        <div class="form_div">
                            <input type="text" class="form_input" placeholder="Digite seu nome aqui." id="nomeVagas" name="nomeVagas">
                        </div>

                        <div class="form_div">
                            <input type="email" class="form_input" placeholder="Digite seu email aqui." id="emailVagas" name="EmailVagas">
                        </div>

                        <div class="form_div">
                            <select id="RadioCargos" name="RadioCargos" class="form_input">
                                <option selected>Selecione um cargo</option>
                                <option value="radio">Rádio</option>
                                <option value="marketing">Marketing</option>
                            </select>
                        </div>

                        <button type="submit" class="form_button">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="./js/console.js"></script>
        <script type="text/javascript" src="./js/modal.js"></script>
        <script type="text/javascript" src="./js/playerMobile.js"></script>
        <script language="javascript" type="text/javascript" src="<?php while($exibecentova = $conccurl->fetch_array()){ echo $exibecentova["centova_url"];} ?>/system/streaminfo.js"></script>
    </body>
</html>