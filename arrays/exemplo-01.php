<?php
//vetor frutas
$frutas = array('laranja', 'abacaxi', 'melancia');

print_r($frutas);
echo "<br><br>";

////////////

$carros[0][0] = 'GM';
$carros[0][1] = 'Cobalt';
$carros[0][2] = 'Onix';
$carros[0][3] = 'Camaro';

$carros[1][0] = 'Ford';
$carros[1][1] = 'Fiesta';
$carros[1][2] = 'Fusin';
$carros[1][3] = 'Eco Sport';

echo $carros[0][3];
echo '<br><br>';

echo end($carros[1]); // irá trazer o ultimo carro ford.
echo '<br><br>';

//////////////

//A Função array_push irá adicionar item ao array já criado.

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
),array(
	'nome'=>'Pedro',
	'idade'=>40
));

print_r($pessoas);
echo "<br><br>";

echo $pessoas[1]['nome'];


?>