<?php

session_start();

echo session_save_path();

echo "<br>";

var_dump(session_status()) ;//0 disabled, 1 none, 2 active

?>