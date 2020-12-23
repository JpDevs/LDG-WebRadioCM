<?php
//-------------------------------------
require_once('includes/config.php');
//--------------------------------------
$nomeVagas = $_POST["nomeVagas"];
$emailVagas = $_POST["EmailVagas"];
$RadioCargos = $_POST["RadioCargos"];
//----------------------------------------
$query = "INSERT INTO `vagas` (`ID`, `Nome`, `Email`, `Area`) VALUES (NULL, '$nomeVagas', '$emailVagas', '$RadioCargos')";
$conquery = $mysqli->query($query) or die ($mysqli->error);
echo"<script language='javascript' type='text/javascript'>
alert('Solicitação enviada com sucesso!');window.location
.href='index.php';</script>";
?>