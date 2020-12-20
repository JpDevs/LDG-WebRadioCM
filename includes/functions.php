<?php
//|-------------------------------------------------
//|                                                 |
//|           DESENVOLVIDO POR JPDEVS               |
//|PROIBIDO COPIAR E/OU DISTRIBUIR SEM PERMISSÃO!   |
//                                                  |
//|-------------------------------------------------|
include("config.php");
//------------------SITE-----------------------------------------------
//variaveis de consultas
$consultabanner = "SELECT Img_URL FROM banners Where id=0";
$consultabanner2 = "SELECT Img_URL FROM banners Where id=1";
$consultaip = "SELECT Ip FROM radio_configs Where id=0";
$consultaporta = "SELECT porta FROM radio_configs Where id=0";
$consultashoutcast = "SELECT shoutcast_url FROM radio_configs Where id=0";
$consultalogincentova = "SELECT login_centova FROM radio_configs Where id=0";
$consultalinkcentova = "SELECT link_centovacast FROM radio_configs Where id=0";
$consultalogo = "SELECT logourl FROM site_settings Where id=0";
$consultatitulo = "SELECT titulo FROM site_settings Where id=0";
$consultabackground = "SELECT background FROM site_settings Where id=0";
$consultainstagram = "SELECT Instagram from redes_sociais where id=0";
$consultatwitter = "SELECT Twitter from redes_sociais where id=0";
$consultagoogleplay = "SELECT GooglePlay from redes_sociais where id=0";
$consultaaltura = "SELECT Altura from site_settings where id=0";
$consultalargura = "SELECT Largura from site_settings where id=0";
//execuções das query
$conbanner1 = $mysqli->query($consultabanner) or die ($mysqli->error);
$conbanner2 = $mysqli->query($consultabanner2) or die ($mysqli->error);
$conip = $mysqli->query($consultaip) or die ($mysqli->error);
$conport = $mysqli->query($consultaporta) or die ($mysqli->error);
$consc = $mysqli->query($consultashoutcast) or die ($mysqli->error);
$conlogincentova = $mysqli->query($consultalogincentova) or die ($mysqli->error);
$conlogincentova2 = $mysqli->query($consultalogincentova) or die ($mysqli->error);
$conlogincentova3 = $mysqli->query($consultalogincentova) or die ($mysqli->error);
$conlinkcentova = $mysqli->query($consultalinkcentova) or die ($mysqli->error);
$conlogo = $mysqli->query($consultalogo) or die ($mysqli->error);
$contitulo = $mysqli->query($consultatitulo) or die ($mysqli->error);
$conbackground = $mysqli->query($consultabackground) or die ($mysqli->error);
$conig = $mysqli->query($consultainstagram) or die ($mysqli->error);
$contt = $mysqli->query($consultatwitter) or die ($mysqli->error);
$congplay = $mysqli->query($consultagoogleplay) or die ($mysqli->error);
$conaltura = $mysqli->query($consultaaltura) or die ($mysqli->error);
$conlargura = $mysqli->query($consultalargura) or die ($mysqli->error);
//------------------------------------------------------------------------------
//PAINEL

$exibeusuario = "SELECT login from usuarios where id=0000000001";
$exibesenha = "SELECT senha from usuarios where id=0000000001";

//--

$conuser = $mysqli->query($exibeusuario) or die ($mysqli->error);
$conpass = $mysqli->query($exibesenha) or die ($mysqli->error);
$conuser2 = $mysqli->query($exibeusuario) or die ($mysqli->error);
$contitulo2 = $mysqli->query($consultatitulo) or die ($mysqli->error);

?>