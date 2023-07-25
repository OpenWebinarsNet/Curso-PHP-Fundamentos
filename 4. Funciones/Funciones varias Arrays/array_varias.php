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
	
	$elementos = count($frutas);
	echo $elementos;
	echo "<p> </p>";
	
	$actual = current($frutas);
	echo $actual;
	echo "<p> </p>";
	
	//Mueve el puntero a la última posición
	end($frutas);
	
	$actual = current($frutas);
	echo $actual;
	echo "<p> </p>";
	
	//Rebobina el puntero al primer elemento
	reset($frutas);
	
	$actual = current($frutas);
	echo $actual;
	echo "<p> </p>";
	
	$meses = array(0 => 'Enero', 1 => 'Febrero', 2 => 'Marzo', 3 => 'Abril');
	
	//Busca un valor y devuelve su Key
	$clave = array_search('Febrero', $meses); 
	
	if($clave){
		echo $clave. " " .$meses[$clave];
	}
	else{
		echo "Valor no encontrado";
	}
	echo "<p> </p>";
	
	$clave = array_search('Mayo', $meses);
	
	if($clave){
		echo $clave. " " .$meses[$clave];
	}
	else{
		echo "Valor no encontrado";
	}
	echo "<p> </p>";
	
	
?>
</body>
</html>