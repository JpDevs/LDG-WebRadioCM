<?php
//-----------------------------------------//
require_once('includes/config.php');
//-----------------------------------------//
$nomePedidos = $_POST['nomePedidos'];
$emailPedidos = $_POST['emailPedidos'];
$musicaPedidos = $_POST['musicaPedidos'];
$query = "INSERT INTO `pedidos` (`ID`, `Nome`, `Email`, `Musica`) VALUES (NULL, '$nomePedidos', '$emailPedidos', '$musicaPedidos')";
$conquery = $mysqli->query($query) or die ($mysqli->error);
echo"<script language='javascript' type='text/javascript'>
alert('Pedido enviado com sucesso!');window.location
.href='index.php';</script>";
?>