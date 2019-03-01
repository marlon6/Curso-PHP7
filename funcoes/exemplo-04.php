<?php 

/////////////parametro passado por valor:

$a = 10;

function trocaValor($x){
$x += 50;
return $x;
}

echo trocaValor($a);
echo "<br>";
echo $a; //variável a não tem seu valor alterado pela função.
echo "<br><br>";



//////////////parametro passado por referência:

function trocaReferencia(&$x){
$x +=50;
return $x;
}

echo trocaReferencia($a);
echo "<br>";
echo $a;


?>