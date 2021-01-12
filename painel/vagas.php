<!DOCTYPE html>
<?php
require_once("authcookie.php");
require_once("../includes/config.php");
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
            <a href="./cadastrarloc.php">Cadastrar Loc.</a>
            <a href="./vagas.php">Vagas</a>
            <a href="./ajustes.php">Configurações</a>
            <a href="./logout.php">Sair</a>
        </div>
        <!--PRINCIPAL-->
        <main>
            <h1>Vagas</h1>
            <hr>

            <!--TABELA DE PEDIDOS-->
            <table border="3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Área</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    echo "<tr>";
                        while($exibevagas = $convagas->fetch_assoc()) {
                            echo "<td>" . $exibevagas["ID"] . "</td>";
                            echo "<td>" . $exibevagas["Nome"] . "</td>";
                            echo "<td>" . $exibevagas["Email"] . "</td>";
                            echo "<td>" . $exibevagas["Area"] . "</td></tr>";
                        }
                       ?>
                        
                        
                    </tr>
                </tbody>
            </table>
                

        </main>
        <script language="javascript" type="text/javascript" src="<?php while($showurl = $conccurl->fetch_assoc()){ echo $showurl["centova_url"];}?>/system/streaminfo.js"></script>
    </body>
</html>