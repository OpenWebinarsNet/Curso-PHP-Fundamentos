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
	
	//Eliminar el último elemento
	$eliminado = array_pop($frutas);
	
	var_dump($eliminado);
	echo "<p> </p>";
	
	var_dump($frutas);
	echo "<p> </p>";
	
	//Añadir al final del array
	array_push($frutas, "pera");
	
	var_dump($frutas);
	echo "<p> </p>";
	
?>
</body>
</html>