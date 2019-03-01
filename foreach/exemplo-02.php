<html>
	
<body>
	<form>
		<input type="text" name="nome">
		<input type="date" name="data_nascimento">
		<input type="submit" value="Enviar">
	</form>


	</body>
</html>

<?php

if(isset($_GET)){
	foreach ($_GET as $key => $value) {
		echo strtoupper("campo $key <br>"). ucwords("$value <br><hr>") ;
	}
}

?>