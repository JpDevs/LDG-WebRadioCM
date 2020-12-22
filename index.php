<!--
    DESENVOLVIDO POR JpDevs & Álvaro
    Copyright 2020
    A cópia desse site é ilegal e poderá acarretar meios judiciais
    Level Development Group
-->
<?php
require('includes/config.php');
require('includes/functions.php');
$centovalogin = $concclogin->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php while($exibetitulo1 = $contitulo->fetch_array()){ echo $exibetitulo1["titulo"]; }?></title>
        <meta name="description" content="Diversão em qualquer lugar a qualquer hora">
        <meta name="keywords" content="Web rádio, Rádio Level, Radio Level, Rádio">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/modals.css">
        <link rel="stylesheet" href="./css/inputs.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    
    <body style="background: var(--cor-primaria) url('<?php while($showbg = $conbg->fetch_assoc()){ echo $showbg["background"];} ?>') no-repeat;">
        <!--Menu-->
        <div id="navbar" >
            <img src="./img/logo.png" alt="Rádio Level">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a id="vagas">VAGAS</a></li>
                <li><a id="pedidos">FAZER PEDIDO</a></li>
            </ul>
        </div>

        <!--Container comercial-->
        <!--<div id="googleAdsense">
            Código do Google Adsence, caso não tenha só comente a div
        </div>-->

        <!--Main-->
        <div id="app">

            <!--Carrossel de Imagens-->
            <div id="containerBanner">
                <div class="arrows">
                    <button><img src="./img/icons/svg/left-arrow.svg" data-js="carousel_button--back" id="leftArrow"  alt=""></button>
                    <button><img src="./img/icons/svg/right-arrow.svg" data-js="carousel_button--next" id="rightArrow" alt=""></button>
                </div>

                <!--Quando for criar o while deixa um de fora com a class="carousel_item carousel_item--visible" pro js conseguir mostrar 1 banner já na tela-->

                <div data-js="carousel_item" class="carousel_item carousel_item--visible">
                    <img src="./img/IMAGEM 5.png" class="imgCarousel" alt="">
                </div>

                <div data-js="carousel_item" class="carousel_item">
                    <img src="./img/IMAGEM 6.png" class="imgCarousel" alt="">
                </div>
            </div>

            <!--Player-->
            <!--Aqui você sabe no que mexer eu acho-->
            <div id="containerPlayer">
                <audio src="<?php while($tocaplayer = $consc->fetch_assoc()){ echo $tocaplayer["shoutcast_url"];} ?>"></audio>
                <div id="box1">
                    <img class="cc_streaminfo" data-type="trackimageurl" data-username="radiole1" />
                    <div id="textBox">
                        <span class="cc_streaminfo" data-type="title" data-username="radiole1"></span>
                        <a href="#" class="cc_streaminfo" data-type="song" data-username="radiole1">Carregando ...</a>
                    </div>
                </div>

                <div id="audioButtons">
                    <button id="buttonPP"><img id="imgPP" src="./img/icons/svg/botao-play.svg"></button>
                </div>
            </div>

            <!--Twitter-->
            <!--Mudar só o nome da conta-->
            <div id="containerTwitter">
                <a class="twitter-timeline" data-lang="pt" data-height="480" data-theme="dark" href="https://twitter.com/radiolevel?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>

        <!--Modal's-->
        <div id="modalPedidos" class="modalContainer">
            <div class="modal l-form">
                <button id="btnFechar">X</button>
                <h1 class="form_title">PEDIDOS</h1>
                <form action="" method="POST">
                    <div class="form_div">
                        <input type="text" class="form_input" placeholder="Digite seu nome aqui." id="nomePedidos">
                    </div>

                    <div class="form_div">
                        <input type="email" class="form_input" placeholder="Digite seu email aqui." id="emailPedidos">
                    </div>

                    <div class="form_div">
                        <input type="textarea" class="form_input" placeholder="Peça sua música." id="musicaPedidos">
                    </div>

                    <button type="submit" class="form_button">Enviar</button>
                </form>
            </div>
        </div>

        <div id="modalVagas" class="modalContainer">
            <div class="modal l-form">
                <button id="btnFechar">X</button>
                <h1 class="form_title">VAGAS ABERTAS</h1>
                <form action="" method="POST">
                    <div class="form_div">
                        <input type="text" class="form_input" placeholder="Digite seu nome aqui." id="nomeVagas">
                    </div>

                    <div class="form_div">
                        <input type="email" class="form_input" placeholder="Digite seu email aqui." id="emailVagas">
                    </div>

                    <div class="form_div">
                        <select id="musicaPedidos" class="form_input">
                            <option selected>Selecione um cargo</option>
                            <option value="1">Rádio</option>
                            <option value="2">Marketing</option>
                        </select>
                    </div>

                    <button type="submit" class="form_button">Enviar</button>
                </form>
            </div>
        </div>

        <!--Javascript-->
        <script type="text/javascript" src="./js/modal.js"></script>
        <script type="text/javascript" src="./js/carrossel.js"></script>
        <script type="text/javascript" src="./js/player.js"></script>
        <script type="text/javascript" src="./js/console.js"></script>
        <script type="text/javascript" src="./js/sliderModal.js"></script>
        <script language="javascript" type="text/javascript" src="http://centova.darkhost.com.br:2199/system/streaminfo.js"></script>
    </body>
</html>