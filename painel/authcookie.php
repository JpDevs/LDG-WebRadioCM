
<?php
//JpDevs
$login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      session_start();
    }else{
      header('Location: login.php');
      die();
    }
    ?>