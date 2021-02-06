
<?php
//JpDevs
$login_cookie = $_COOKIE['3e211765d7a83cade48a03123a2c0f0c'];
    if(isset($login_cookie)){
      session_start();
    }else{
      header('Location: login.php');
      die();
    }
    ?>