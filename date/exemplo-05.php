<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D"); //Período de 15 dias

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);//métido add serve para adicionar uma data. Aqui irá somar 15 dias

echo "<br>";

echo $dt->format("d/m/Y H:i:s");


?>