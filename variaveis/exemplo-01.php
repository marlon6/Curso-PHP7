<?php

$nome = 'Hcode';
$sobrenome = "Udemy";

$nomeCompleto = $nome.$sobrenome;

echo "$nome <br>";

var_dump ($nome);

unset($nome); //elimina a variáve da memória. Pode ser usado para limpar várias variáveis ex.: unset($nome1, $nome2, $nome3)

echo "<br>";

if (isset($nome)){
	echo $nome;
}else{
	echo 'variável $nome foi limpada.';
}

?>