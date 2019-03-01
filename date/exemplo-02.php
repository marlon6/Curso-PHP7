<?php

$ts = strtotime("2001-09-11"); //timestamp dessa data (1000177200).

//$ts = strtotime("now");

//$ts = strtotime("+1 week"); //aceita expressões: dias, meses, horas, etc..

echo date("D d/m/Y", $ts);


?>