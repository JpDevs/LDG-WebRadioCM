
<?php
//JpDevs
$login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      session_start();
      header('Location: main.php');
    }else{
      header('Location: login.php');
      die();
    }
    ?>
    