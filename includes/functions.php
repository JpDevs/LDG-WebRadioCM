<?php
require_once('config.php');
//tabela site_settings
$consultatitulo =  "SELECT titulo FROM site_settings WHERE id=01";
$consultalogo = "SELECT logo FROM site_settings WHERE id=01";
$consultabg = "SELECT background FROM site_settings WHERE id=01";
//tabela radio_settings
$consultashoutcast = "SELECT shoutcast_url FROM radio_settings WHERE id=01";
$consultacentova = "SELECT centova_url FROM radio_settings WHERE id=01";
$consultacclogin = "SELECT centova_login FROM radio_settings WHERE id=01";
//tabela imagens
$consultaimg1 = "SELECT Img_URL FROM imagens WHERE id=0";
$consultaimg2 = "SELECT Img_URL FROM imagens WHERE id=1";
//redes sociais
$consultatwitter = "SELECT Twitter FROM redes_sociais WHERE id=0";
//pedidos e VAGAS
$consultapedidos = "SELECT `ID`, `Nome`, `Email`, `Musica` FROM `pedidos` WHERE 1";
$consultavagas = "SELECT `ID`, `Nome`, `Email`, `Area` FROM `vagas` WHERE 1";
//---------------------------------------------------------------//
//site_settings
$contitulo = $mysqli->query($consultatitulo) or die ($mysqli->error);
$conlogo = $mysqli->query($consultalogo) or die ($mysqli->error);
$conbg = $mysqli->query($consultabg) or die ($mysqli->error);
//radio_settings
$consc = $mysqli->query($consultashoutcast) or die ($mysqli->error);
$conccurl = $mysqli->query($consultacentova) or die ($mysqli->error);
$concclogin = $mysqli->query($consultacclogin) or die ($mysqli->error);
$concclogin2 = $mysqli->query($consultacclogin) or die ($mysqli->error);
//imagens
$conimg1 = $mysqli->query($consultaimg1) or die ($mysqli->error);
$conimg2 = $mysqli->query($consultaimg2) or die ($mysqli->error);
//redes sociais
$contt = $mysqli->query($consultatwitter) or die ($mysqli->error);
//pedidos e VAGAS DE
$conpedidos = $mysqli->query($consultapedidos) or die ($mysqli->error);
$convagas = $mysqli->query($consultavagas) or die ($mysqli->error);