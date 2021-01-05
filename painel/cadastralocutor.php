<?php
require('../includes/config.php');
$nome = $_POST['nome'];
$senha = MD5($_POST['senha']);
$addloc = "INSERT INTO `locutores` (`login`, `senha`) VALUES ('$nome', '$senha')";
$confirma = $mysqli->query($addloc) or die ($mysqli->error);
echo "<script type='text/javascript'>
alert('Locutor adicionado com sucesso!');
history.go(-1);;
</script>
";

?>