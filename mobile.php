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
        <title>Document</title>
        <link rel="stylesheet" href="./css/mobile.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body style="background: var(--cor-primaria) url('<?php while($showbg = $conbg->fetch_assoc()){ echo $showbg["background"];} ?>') no-repeat;">
        
        <div id="containerPlayer">
        <audio src="includes/streaming.php"></audio>
                        <!--includes/streaming.php-->
            <audio src="includes/streaming.php"></audio>
            <div id="box1">
                <img class="cc_streaminfo" data-type="trackimageurl" data-username="<?php while($exibelogin = $concclogin2->fetch_array()){echo $exibelogin["centova_login"]; ?>" />
                <div id="textBox">
                    <span class="cc_streaminfo" data-type="title" data-username="<?php echo $exibelogin["centova_login"]; ?>"></span>
                    <a href="#" class="cc_streaminfo" data-type="song" data-username="<?php echo $exibelogin["centova_login"]; } ?>">Carregando ...</a>
                </div>
        </div>

        <script type="text/javascript" src="./js/player.js"></script>
        <script language="javascript" type="text/javascript" src="<?php while($exibecentova = $conccurl->fetch_array()){ echo $exibecentova["centova_url"];} ?>/system/streaminfo.js"></script>
    </body>
</html>