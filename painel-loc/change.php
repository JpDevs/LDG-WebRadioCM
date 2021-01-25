<?php
require("cfg.php");
require("authcookie.php");
$senha = md5($_POST['senha']);
$querymuda = "UPDATE `locutores` SET `senha` = '$senha' WHERE login = '$login_cookie'";
$executaquery = $mysqli->query($querymuda) or die ($mysqli->error);
 echo"<script language='javascript' type='text/javascript'>
        alert('Senha alterada com sucesso!');window.location
        .href='logout.php';</script>";
?>