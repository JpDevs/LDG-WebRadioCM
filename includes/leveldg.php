<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,            "http://licenciamentoldg.jpdevs.host/verificador.php?key=".$key );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POST,           1 );
curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: text/plain')); 
$retorno=curl_exec ($ch);
  if($retorno == "inativa"){
	header('Location: http://licenciamentoldg.jpdevs.host/validador.php');
	die();
}
if($retorno == "suspenso") {
    echo "Erro:  Chave de ativação suspensa!";
    die();

}
 elseif($retorno != "ativa"){
	echo "Chave de ativação invalida!";
	die();
}
?>