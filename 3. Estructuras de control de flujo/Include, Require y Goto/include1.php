<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	
	//include
	
	echo "<p> Soy el primer fichero </p>";
	
	//Cambiar el nombre para forzar el Warning
	include "include2.php";
	
	include_once "include2.php";
	
?>
</body>
</html>