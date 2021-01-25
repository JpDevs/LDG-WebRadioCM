<?php
header("Location:index.php");
require('cfg.php');
require("../includes/functions.php");
//--------------------------------------//
//////////////////////////////////////////
//--------------------------------------//
$pCentova = $_POST['pCentova'];
$lCentova = $_POST['lCentova']; //login cc
$lkCentova = $_POST['lkCentova']; // link shoutcast
$nSite = $_POST['nSite'];
$lLogo = $_POST['lLogo'];
$lBg = $_POST['lBg'];
$br1 = $_POST['1br'];
$br2 = $_POST['2br'];
$nTT = $_POST['nTT'];
//-------------------------------
$qPcentova = "UPDATE `radio_settings` SET `centova_url` = '$pCentova' WHERE ID = 01";
$qlcentova = "UPDATE `radio_settings` SET `centova_login` = '$lCentova' WHERE ID = 01";
$qlkcentova = "UPDATE `radio_settings` SET `shoutcast_url` = '$lkCentova' WHERE ID = 01";
$qnSite = "UPDATE `site_settings` SET `titulo` = '$nSite' WHERE id = 01";
$qlLogo = "UPDATE `site_settings` SET `logo` = '$lLogo' WHERE id = 01";
$qlBg = "UPDATE `site_settings` SET `background` = '$lBg' WHERE id = 01";
$q1br = "UPDATE `imagens` SET `Img_URL` = '$br1' WHERE id = 0";
$q2br = "UPDATE `imagens` SET `Img_URL` = '$br2' WHERE id = 1";
$qnTT = "UPDATE `redes_sociais` SET `Twitter` = '$nTT' WHERE id = 0";
//------------------------------------------------------------------------------------------
$a = $mysqli->query($qPcentova) or die ($mysqli->error);
$b = $mysqli->query($qlcentova) or die ($mysqli->error);
$c = $mysqli->query($qlkcentova) or die ($mysqli->error);
$d = $mysqli->query($qnSite) or die ($mysqli->error);
$e = $mysqli->query($qlLogo) or die ($mysqli->error);
$f = $mysqli->query($qlBg) or die ($mysqli->error);
$g = $mysqli->query($q1br) or die ($mysqli->error);
$h = $mysqli->query($q2br) or die ($mysqli->error);
$i = $mysqli->query($qnTT) or die ($mysqli->error);
//------------------------------------------------------------------------------------------
?>