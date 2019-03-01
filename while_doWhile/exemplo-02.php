<?php

//enquanto o total com o desconto for maior que 100, será aplicado novo desconto de 10%.
$total = 150;
$desconto = 0.9; //10%

do{
	$total *= $desconto;
	//echo $total. '<br>';
}while ($total > 100);

echo $total;

?>