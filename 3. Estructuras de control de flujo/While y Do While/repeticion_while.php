<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	$num = 10;
	$respuesta = "Oporto";
	$intentos = 1;

	//Estructuras de control de flujo de repetición
	
	//Números del 10 al 0
	while($num >= 0){
			echo $num;
			echo "<p> </p>";
			$num--;
	}
	
	//Pregunta Capital de Portugal
	while($respuesta != "Lisboa"){
			echo "Intento " . $intentos;
			echo "<p> </p>";
			if($intentos == 3){
				$respuesta = "Lisboa";	
			}
			$intentos++;
	}
?>
</body>
</html>