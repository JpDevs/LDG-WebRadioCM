<?php
require('includes/config.php');
$nome = $_POST['nome'];
$senha MD5($_POST['senha']);
$mudasenha = "";
$confirmapass = $mysqli->query($mudasenha) or die ($mysqli->error);
echo "<script type='text/javascript'>
alert('Locutor adicionado com sucesso!');
history.go(-1);;
</script>
";
?>