<?php
//JpDevs
require('cfg.php');
require('authcookie.php');
setcookie('login',$login,time() - 3600);
header("Location:login.php");
?>