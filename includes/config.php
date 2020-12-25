<?php
//Desenvolvido por JpDevs
require_once "auth.php";  //
$mysqli = new mysqli($host, $usuario, $senha, $bd);
$mysqli -> set_charset("utf8");
if($mysqli->connect_errno) {
    echo "Falha na conexão com a data-base, verifique se a instalação foi feita corretamente.";
    header("Location:install");

}
?>

