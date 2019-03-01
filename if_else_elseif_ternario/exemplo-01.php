<?php

$minhaIdade = 17;

$adolescente = 15;
$adulto = 18;

if($minhaIdade < $adolescente){
	echo 'Criança';
} else if($minhaIdade < $adulto){
	echo 'Adolescente';
} else{
	echo "adulto";
}

echo "<br>";

$areUadult = ($minhaIdade < $adulto) ? "não é adulto" : "é adulto";

echo $areUadult;

?>