<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	
	$numero1 = 5;
	$numero2 = 10;
	
	//Función sin parámetros
	
	function sumar(){
		echo "Soy una función para sumar";
	}
	
	//Llamada a la función
	sumar();
	
	echo "<p> </p>";
	
	//Función con parámetros sin retorno
	
	function sumarNumeros($num1, $num2){
		echo $num1 + $num2;
	}
	
	sumarNumeros($numero1, 1);
	
	echo "<p> </p>";
	
	//Función con parámetros y retorno
	
	function sumarNumerosRetorno($num1, $num2){
		return $num1 + $num2;
	}
	
	$resultado = sumarNumerosRetorno($numero1,$numero2);
	echo $resultado;
	
?>
</body>
</html>