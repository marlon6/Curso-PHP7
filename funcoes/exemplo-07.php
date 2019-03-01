<?php

//uma novidade no php7 é poder moldar o tipo de retorno da função

function soma(int ...$valores)/*:string*/ {
	return array_sum($valores); //array_sum irá fazer a soma de todos os itens do array.
}

echo var_dump(2, 2);
echo '<br>';

?>