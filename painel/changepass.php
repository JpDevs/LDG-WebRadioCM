<?php
require('../includes/config.php');
$nome = $_POST['nome'];
$senha = MD5($_POST['senha']);
$mudasenha = "UPDATE `usuarios` SET `senha` = '$senha' WHERE `ID` = 01";
$mudauser = "UPDATE `usuarios` SET `login` = '$nome' WHERE `ID` - 01";
$confirmapass = $mysqli->query($mudasenha) or die ($mysqli->error);
$confirmalogin = $mysqli->query($mudauser) or die ($mysqli->error);
echo "<script type='text/javascript'>
alert('Senha alterada com sucesso!');
window.location.href = 'logout.php';
</script>
";
?>