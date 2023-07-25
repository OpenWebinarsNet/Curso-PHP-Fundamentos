<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	
	//Funciones de Fecha y Hora
	
	echo "Zona horaria: " . date_default_timezone_get() . "<br />";
	
	date_default_timezone_set("America/Los_Angeles");
	
	echo "Zona horaria: " . date_default_timezone_get() . "<br />";
?>
</body>
</html>