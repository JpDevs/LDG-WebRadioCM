
<?php
//JpDevs
$login_cookie = $_COOKIE['3ceb2b1874575fb8e58579ef612f053f'];
    if(isset($login_cookie)){
      session_start();
    }else{
      header('Location: login.php');
      die();
    }
    ?>