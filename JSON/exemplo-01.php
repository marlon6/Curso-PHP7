<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
),array(
	'nome'=>'Pedro',
	'idade'=>40
));

echo json_encode($pessoas);


?>