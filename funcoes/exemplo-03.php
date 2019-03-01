<?php

function ola(){

	$argumentos = func_get_args();//func_get_args retorna um array dos parâmetros informados.
	return $argumentos;

}

var_dump(ola("bom dia", 10));

?>