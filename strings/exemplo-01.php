<?php

$nome = 'Maria';

echo "ABC $nome"; //mostra texto e conteúdo das variáveis.
echo "<br>";
echo 'ABC $nome'; //considera tudo como texto.

echo "<br>";

$nome = 'Maria Catariana';

echo strtoupper($nome); //a função strtoupper deixa tudo em maiúsculo.

$nome = 'PEDRO MACEDO';
echo "<br>";

echo strtolower($nome); //TRANSFORMA PARA minúsculo.
echo "<br>";

$nome = 'thiago araujo';

echo ucfirst($nome); //primeira letra da primeira palavra fica em maiúscula.
echo "<br>";

echo ucwords($nome); //primeira letra das palavras ficam em maiúscula.
echo "<br>";

$nome = 'Maria';
$nome = str_replace("a", "4", $nome); //"o quê", "pelo o quê", "onde".
$nome = str_replace("i", "1", $nome);

echo $nome;

?>