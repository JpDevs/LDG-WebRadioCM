<!DOCTYPE html>
<?php
require_once("authcookie.php");
require_once("./cfg2.php");
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
            <h1>Painel</h1>
            <hr>
            <h4>Pedidos</h4>
            <!--TABELA DE PEDIDOS-->
            <table border="3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Pedido</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Cala a boca corno! kkkkkkkkkkkkkkkkkkkk-->
                    <!--É UM WHILE SÓ CARALHO  -->
                    <?php
                    echo "<tr>";
                        while($exibepedidos = $conpedidos->fetch_assoc()) {
                            echo "<td>" . $exibepedidos["ID"] . "</td>";
                            echo "<td>" . $exibepedidos["Nome"] . "</td>";
                            echo "<td>" . $exibepedidos["Email"] . "</td>";
                            echo "<td>" . $exibepedidos["Musica"] . "</td></tr>";
                        }
                       ?>
                        
                        
                    </tr>
                </tbody>
            </table>
                        <center><h3>Informações</h3></center>
                        <hr>
                        <?php
                            while($mostralogincc = $concclogin->fetch_assoc()) {
                        ?>
                        <center>
                        <strong>Status do servidor:</strong> <span class="cc_streaminfo" data-type="server" data-username="<?php echo $mostralogincc["centova_login"]; ?>"></span><br />
                        <strong>Fonte Conectada:</strong> <span class="cc_streaminfo" data-type="source" data-username="<?php echo $mostralogincc["centova_login"]; ?>"></span><br />
                        <strong>Auto Dj:</strong> <span class="cc_streaminfo" data-type="autodj" data-username="<?php echo $mostralogincc["centova_login"]; ?>"></span><br />
                        <strong>Música atual:</strong> <span class="cc_streaminfo" data-type="song" data-username="<?php echo $mostralogincc["centova_login"]; ?>"></span><br />
                        <strong>Ouvintes:</strong> <span class="cc_streaminfo" data-type="listeners" data-username="<?php echo $mostralogincc["centova_login"]; ?>"></span><br />
                        <strong>Titulo da transmissão:</strong> <span class="cc_streaminfo" data-type="title" data-username="<?php echo $mostralogincc["centova_login"]; ?>"></span><br />
                        <strong>Bitrate:</strong> <span class="cc_streaminfo" data-type="bitrate" data-username="<?php echo $mostralogincc["centova_login"]; ?>"></span><br />
                        <img class="cc_streaminfo" data-type="trackimageurl" data-username="<?php echo $mostralogincc["centova_login"]; ?>" /><br /><br />
                            </center>
                    <?php } ?>

        </main>
        <script language="javascript" type="text/javascript" src="<?php while($showurl = $conccurl->fetch_assoc()){ echo $showurl["centova_url"];}?>/system/streaminfo.js"></script>
    </body>
</html>