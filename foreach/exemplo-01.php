<?php

$meses = array(
	"Janeiro", "fevereiro", "março",
	"abril", "maio", "junho",
	"julho", "agosto", "setembro",
	"outubro", "novembro", "dezembro"
);


foreach ($meses as $mes) {
	echo "O mês é $mes <br>";
}

echo '<br>';

// foreach pegando o indice(chave) de cada item:
foreach ($meses as $index => $mes) {

	echo "Indice: $index <br>";
	echo "O Mês é: $mes <br><br>";
}

?>