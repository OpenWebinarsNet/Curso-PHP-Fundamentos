<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Funciones de Arrays 
	
	$frutas = array("naranja", "plátano", "manzana", "frambuesa");
	
	var_dump($frutas);
	echo "<p> </p>";
	
	//Eliminar el primer elemento
	$eliminado = array_shift($frutas);
	
	var_dump($eliminado);
	echo "<p> </p>";
	
	var_dump($frutas);
	echo "<p> </p>";
	
	//Añadir al inicio del array
	array_unshift($frutas, "pera");
	
	var_dump($frutas);
	echo "<p> </p>";
	
?>
</body>
</html>