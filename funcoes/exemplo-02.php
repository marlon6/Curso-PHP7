<?php
//é possível definir o parametro com um valor padrão saso o usuário não defina o seu parâmetro

function ola($texto = "Mundo"){
	return "Olá $texto!<br>";
}

echo ola();
echo ola("Pedro");

?>