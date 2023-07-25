<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Funciones de Arrays 
	
	$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
	
	var_dump($dias);
	echo "<p> </p>";
	
	//Ordenar el Array
    sort($dias);
	
    var_dump($dias);
	echo "<p> </p>";
	
	$numeros = array(10, 11, 8, 103, 99, 54);
   
	var_dump($numeros);
	echo "<p> </p>";
   
	sort($numeros);
	
	var_dump($numeros);
	echo "<p> </p>";
	
	rsort($numeros);
	
	var_dump($numeros);
	echo "<p> </p>";
	
?>
</body>
</html>