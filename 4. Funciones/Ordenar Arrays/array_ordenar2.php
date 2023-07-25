<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Funciones de Arrays 
	
	$arraynombres = array("Javier"=>"29","Patricia"=>"18","Emilio"=>"26");
	$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
 
	//Ordena y mantiene las Keys
	asort($arraynombres);
	
	//Probar con sort para ver que elimina las Keys y crea 0,1,2
	
	var_dump($arraynombres);
	echo "<p> </p>";
	
	//Ordenar por Keys
	ksort($arraynombres);
	
	var_dump($arraynombres);
	echo "<p> </p>";
	
	//Orden aleatorio, al actualizar cambia el orden
	shuffle($dias);
	
	var_dump($dias);
	echo "<p> </p>";
	
?>
</body>
</html>