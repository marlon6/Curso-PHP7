<?php  

$pessoa = array(
'nome' => 'João',
'idade' => 20
);

foreach ($pessoa as &$value) { //o & irá alterar o valor para dentro e fora do foreach. (passagem de valor por referencia)

	if (gettype($value) === 'integer') $value += 10;
	echo $value.'<br>';
}

print_r($pessoa);
?>