<?php
require_once('config.php');
$stmqry = "SELECT shoutcast_url FROM radio_settings WHERE id=01";
$array = $mysqli->query($stmqry) or die ($mysqli->error);
$streaming = $array->fetch_assoc();
header('Content-Type: audio/mp3');
$f=fopen($streaming["shoutcast_url"],'r');
if(!$f) exit;while(!feof($f)){ echo fread($f,128);flush();}fclose($f);
?>