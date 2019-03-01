<?php

//uma novidade no php7 é poder moldar o tipo de retorno da função

function soma(int ...$valores){ //'...' identifica que haverá vários parâmetros.
	return array_sum($valores); //array_sum irá fazer a soma de todos os itens do array.
}

echo soma(2, 2, 3);

?>