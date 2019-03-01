<?php

//include("inc/exemplo-01.php"); //caso arquivo estivesse fora do diretório informaria ../ (../exemplo-01)


require_once("inc/exemplo-01.php"); // ambos tem a mesma funcionalidade, porém o require gera erro fatal se o arquivo não exixtir ou não funcionar corretamente(para a execução);
//O include tenta funcionar mesmo que o arquivo não exista ou esteja com problema.

require_once("inc/exemplo-01.php"); // o require_once impede a segunda chamada. No casso esse segundo require não irá funcionar, de forma a evitar erro.

$resultado = somar(10, 5);

//require_once("inc/exemplo-01.php");
//require_once("inc/exemplo-01.php"); //ocorre erro na segunda chamada.

echo $resultado;

?>