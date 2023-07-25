<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	// Definición de constantes con la palabra reservada const
	const PI = 3.141592;
	echo PI;
	echo "<p> </p>";
	
	//Mostraría un error ya que la constante no puede modificar su valor
	PI = PI +1;
	
	// Definición de constantes con la función define
	define("NOMBRE", "Luisja");
	echo NOMBRE;
	
?>
</body>
</html>