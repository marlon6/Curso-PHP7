<?php

for ($i = 0; $i < 10; $i++){
	echo $i.' ';
} // "i" é o index. Enquanto "i" for menor que 0 será execultado o comando. i++ faz o valor subir em cada interação.

echo "<br>";

//pulando de cindo em cindo:
for ($i = 0; $i < 20; $i+=5){
	echo $i.'<br>';
}

echo "<br>";

for ($i = 0; $i < 60; $i+=5){

	if($i > 20 && $i < 40) continue; //irá pular números entre 20 e 40
	echo $i.'<br>';
}

/*for ($i=0; $i < 10; $i--){ NUNCA EXECUTE dessa forma. Pode derrubar o servidor. Nessa situação, i sempre será menor que 10.
	echo $i." ";
}*/

//exemplo usando for para escolher lista de anos.

echo "<select>"; //tag html para criar lista de seleção.

for ($i=date("Y"); $i > date("Y")-100 ; $i--) { 
	echo '<option value = "$i">'."$i".'</option>';
}
echo "</select>";
?>