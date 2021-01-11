<?php
//https://jpdevs.host

require('../includes/config.php');
$login = $_POST['User'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['Pass']);
  if (isset($entrar)) {

    $consultasq = "SELECT * FROM locutores WHERE login =
    '$login' AND senha = '$senha'";


    $verifica = mysqli_query($mysqli, $consultasq) or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:main.php");
      }
  }
?>