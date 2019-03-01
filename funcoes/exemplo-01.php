<?php
//subrotina
function ola(){

	echo "Olá Mundo! <br>"; 
}

//função
function aumentoSalario($salario, $aumento){
return ($salario * $aumento / 100) + $salario;
}

ola();

$salario = 1000;
$aumento = 20;
$salarAtualizado = aumentoSalario($salario, $aumento);

echo $salarAtualizado;

?>