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
        <script type="text/javascript">
            var url_mobile = "/mobile.php";
            (function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))window.location=b})(navigator.userAgent||navigator.vendor||window.opera,url_mobile);
        </script>
    </head>
    
    <body style="background: var(--cor-primaria) url('<?php while($showbg = $conbg->fetch_assoc()){ echo $showbg["background"];} ?>') no-repeat;">
        <!--Menu-->
            <div id="navbar" >
                <img src="<?php while($exibelogo = $conlogo->fetch_assoc()){ echo $exibelogo["logo"];}?>" alt="Rádio Level">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a id="vagas">VAGAS</a></li>
                    <li><a id="pedidos">FAZER PEDIDO</a></li>
                </ul>
            </div>

        <div id="desktop">

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

                    
                    <div data-js="carousel_item" class="carousel_item carousel_item--visible">
                        <img src="<?php while($exibeimg = $conimg1->fetch_assoc()){ echo $exibeimg["Img_URL"];} ?>" class="imgCarousel" alt="">
                    </div>

                    <div data-js="carousel_item" class="carousel_item">
                        <img src="<?php while($exibeimg2 = $conimg2->fetch_assoc()){ echo $exibeimg2["Img_URL"];} ?>" class="imgCarousel" alt="">
                    </div>
                </div>
                <div id="containerPlayer">
                    <audio src="includes/streaming.php"></audio>
                    <div id="box1">
                        <img class="cc_streaminfo" data-type="trackimageurl" data-username="<?php while($exibelogin = $concclogin2->fetch_array()){echo $exibelogin["centova_login"]; ?>" />
                        <div id="textBox">
                            <span class="cc_streaminfo" data-type="title" data-username="<?php echo $exibelogin["centova_login"]; ?>"></span>
                            <a href="#" class="cc_streaminfo" data-type="song" data-username="<?php echo $exibelogin["centova_login"]; } ?>">Carregando ...</a>
                        </div>
                    </div>

                    <div id="audioButtons">
                        <button id="diminuirVol" onclick="document.querySelector('audio').volume-=0.1"><img id="imgDV" src="./img/icons/svg/reduza-o-volume.svg"></button>
                        <button id="buttonPP"><img id="imgPP" src="./img/icons/svg/botao-play.svg"></button>
                        <button id="aumentarVol" onclick="document.querySelector('audio').volume+=0.1"><img id="imgAV" src="./img/icons/svg/aumentar-o-volume.svg"></button>
                    </div>
                </div>
                <div id="containerTwitter">
                    <a class="twitter-timeline" data-lang="pt" data-height="480" data-theme="dark" href="https://twitter.com/<?php while($exibetwitter = $contt->fetch_assoc()){echo $exibetwitter["Twitter"];} ?>?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
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

        <!--Javascript-->
        <script type="text/javascript" src="./js/modal.js"></script>
        <script type="text/javascript" src="./js/carrossel.js"></script>
        <script type="text/javascript" src="./js/player.js"></script>
        <script type="text/javascript" src="./js/console.js"></script>
        <script type="text/javascript" src="./js/sliderModal.js"></script>
        <script language="javascript" type="text/javascript" src="<?php while($exibecentova = $conccurl->fetch_array()){ echo $exibecentova["centova_url"];} ?>/system/streaminfo.js"></script>
    </body>
</html>