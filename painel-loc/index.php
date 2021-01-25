
<?php
//JpDevs
$login_cookie = $_COOKIE['EB$567424Lc'];
    if(isset($login_cookie)){
      session_start();
      header('Location: main.php');
    }else{
      header('Location: login.php');
      die();
    }
    ?>
    