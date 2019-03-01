<?php

for($i = 0; $i <= 10; $i++){
	if($i % 2 != 0) continue;
	echo $i .'<br>';

}

echo "<br>";

echo "<select>";

	for($ano = date('Y');$ano > date('Y')-50; $ano--){
		echo "<option value=$ano> $ano </option>";
		
	}
echo "</select>";
?>


