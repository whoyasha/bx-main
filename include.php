<?php

if ( file_exists(__DIR__ . "/install/classes/helper.php") )
	include(__DIR__ . "/install/classes/helper.php");

$MODULE_ID = array_pop(explode("/", __DIR__));
$init = initBxModule($MODULE_ID);

?>