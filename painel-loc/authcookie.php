
<?php
//JpDevs
$login_cookie = $_COOKIE['EB$567424Lc'];
    if(isset($login_cookie)){
      session_start();
    }else{
      header('Location: login.php');
      die();
    }
    ?>