<?php

////////////////////tipos de dados simples
$nome = 'Hcode';
$ano = 1989;
$salario = 3800.45;
$bloqueado = false;
/////////////////////////////////////////tipos de dados compostos
$frutas = array('abacaxi', 'laranja', 'melância');

//echo $frutas['2']; 
//echo "<br>";
$nascimento = new DateTime();
//var_dump($nascimento);

//////////////////////////tipos de dados especiais
$arquivo = fopen('exemplo-02.php', 'r');

//var_dump($arquivo);

$nulo = NULL; // auzencia de valor;
$vazio = ' '; // foi iniciado com um espaço reservado na memória;
?>