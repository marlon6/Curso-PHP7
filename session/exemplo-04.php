<?php
//session_id('ggh9hlnibj95p7lr29sf344glm'); //para usar seção fixa.
session_start();

session_regenerate_id();//gera uma nova seção

echo session_id();

?>