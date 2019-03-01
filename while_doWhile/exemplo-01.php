<?php

/*$condicao = true;
while($condicao) {

	$numero = rand(1, 10);

	if ($numero === 3) {
		echo 'Três! ';
		$condicao = false;
	}

	echo $numero . ' ';

}*/

$condicao = true;

$contador = 0;

while ($condicao) {
	$numero = rand(1, 10);
	$contador++;
	echo "| $contador".'º: ';
	
	

	if ($numero === 3){
		echo "Três!";
		$condicao = false;
	}

	echo "$numero ";
}



?>