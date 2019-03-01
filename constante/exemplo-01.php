<?php

define('SERVIDOR', '127.0.0.1');

echo SERVIDOR;
echo "<br><br>";


///////////Array Constante /////////////

define('BANCO_DE_DADOS', [
	'123.0.0.1',
	'root',
	'senha',
	'nome_bando_de_dados'
],true); //parametro true torna contante case sensitive

print_r(BANCO_DE_DADOS);//BANCO_DE_DADOS[1]
echo "<br><br><br>";


///////////////Algumas Constantes própias do PHP//////////
//versão:
echo PHP_VERSION;

echo "<br>";

//Define a barra de separação de diretório ('\' ou '/')
echo DIRECTORY_SEPARATOR;


?>