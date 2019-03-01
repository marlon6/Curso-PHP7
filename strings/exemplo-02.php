<?php

//na contagem da string é contado espaços, acentos. "ç" vale 2.

$frase = "três pratos de trigo";
var_dump(strlen($frase));
echo "<br>";
echo substr($frase, 20);
echo "<br>";

$palavra = "pratos";

$q = strpos($frase, $palavra); //str encontra a posição de uma string.

var_dump($q);
echo "<br>";

$part_texto = substr($frase, 0, $q); //retorna parte de uma string conforme parametros.
var_dump($part_texto);
echo "<br>";

$part_texto2 = substr($frase, 0, $q + strlen($palavra)); 
var_dump($part_texto2);
echo "<br>";

$part_texto3 = substr($frase, $q, strlen($frase));
var_dump($part_texto3);
echo "<br>";

$part_texto4 = substr($frase, $q + strlen($palavra) + 1, strlen($frase));
var_dump($part_texto4);


exit;
$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";
$q = strpos($frase, $palavra); //"onde" e "oquê"" se deseja localizar.
							

$texto = substr($frase, 0, 17);
var_dump($texto);

$texto2 = substr($frase, $q+ strlen($palavra), strlen($frase));

echo "<br>";
var_dump("$texto2") ;

$completo = $texto . $palavra . $texto2;

echo "<br> $completo";

