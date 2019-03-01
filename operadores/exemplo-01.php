<?php

$nome = 'Maria';

echo $nome.' Madalena';

echo "<br>";

$nome .= ' Cristina';

echo $nome.'<br>';

$num1 = 10;

$num1 /= 2;
//$num1 *= 2;

echo $num1;
echo "<br>";

//////////////////////////

$a = 10;
$b = 2;

echo $a + $b;

echo '<br>';

echo $a - $b;

echo '<br>';

echo $a * $b;

echo '<br>';

echo $a / $b;

echo '<br>';

echo $a % $b;

echo '<br>';

echo $a ** $b;

echo '<br>';

//operadores de comparação

var_dump($a > $b);

echo '<br>';

var_dump($a < $b);

echo '<br>';

var_dump($a == $b); // compara valor;

echo '<br>';

var_dump($a === $b); //compara valor e tipo de dado; 

echo '<br>';

var_dump($a != $b);

echo '<br>';

var_dump($a !== $b);

echo '<br>';

echo ($a <=> $b); //operador spaceship. Se 'a' menor 1, se valores iguais 0 e se 'b' maior -1;
echo "<br>";
$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c; //Operador Null Coalesce PHP7. Se 'a' for nulo mostra 'b'. Se 'b' for nulo mostra 'c';

echo "<br>";
///////////// Incremento e Decremento
//pré-incremento
$a = 2;
echo ++$a; //3
echo "<br>";
//pós-incremento

$a = 2;
echo $a++; //2
echo "<br>";
echo $a; //3
echo "<br>";

//pré-decremento
$a = 2;
echo --$a; //1
echo "<br>";
//pós-decremento

$a = 2;
echo $a--; //2
echo "<br>";
echo $a; //1



?>

