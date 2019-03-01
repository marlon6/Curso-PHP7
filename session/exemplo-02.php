<?php

session_start();

//session_unset();//se usado sem parâmetros apaga todas as variáveis de seção.

//unset();

echo $_SESSION["nome"];

//session_destroy();//Diferente da session_unset, que só limpa a seção e mantem o usuário, o session_destroy, limpa a variável e remove o usuário.

?>