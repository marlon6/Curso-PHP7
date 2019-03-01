<?php

$usuarios = array(
	'João', 'Maria', 'José',
	'Pedro', 'Michele', 'Francisca',
);


foreach($usuarios as $usuario){
	echo "$usuario <br>";
}

echo "<br><br>";
foreach($usuarios as $chave => $usuario){
	echo "usuário $chave:<br>";
	echo "$usuario <br><br>";
}

?>