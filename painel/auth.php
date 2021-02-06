<?php
//https://jpdevs.host

require('cfg.php');
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$autoriza = md5("cookiejpdevs");


  if (isset($entrar)) {

    $consultasq = "SELECT * FROM usuarios WHERE login =
    '$login' AND senha = '$senha'";


    $verifica = mysqli_query($mysqli, $consultasq) or die($mysqli->error);
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
      }else{
        setcookie($autoriza,$login);
        header("Location:main.php");
      }
  }
?>