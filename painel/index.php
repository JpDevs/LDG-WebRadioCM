
<?php
//JpDevs
$login_cookie = $_COOKIE['0d15c4519c54d461d4456a9f0a6a2c45'];
    if(isset($login_cookie)){
      session_start();
      header('Location: main.php');
    }else{
      header('Location: login.php');
      die();
    }
    ?>
    