<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	$nota1 = 2;
	$nota2 = 8;
	$nota3 = 5;

	//Estructuras de control de flujo de selección
	
	if($nota1 >= 5){
			echo "Nota1 aprobada";
			echo "<p> </p>";
	}
	
	if($nota2 >= 5){
			echo "Nota2 aprobada";
			echo "<p> </p>";
	}
	
	//Sintaxis alternativa
	if($nota2 >= 5):
			echo "Nota2 aprobada";
			echo "<p> </p>";
	endif;
	
	//if anidados
	if($nota2 >= 5){
			echo "Dentro del primer if";
			echo "<p> </p>";
			if($nota1 >= 9){
				echo "Dentro del segundo if";
				echo "<p> </p>";
			}
	}
	
	//Comparadores lógicos
	if($nota1 >= 5 && $nota2 >=5){
			echo "Nota1 y nota2 aprobadas";
			echo "<p> </p>";
	} 
	
	if($nota2 >= 5 && $nota3 >=5){
			echo "Nota1 y nota3 aprobadas";
			echo "<p> </p>";
	}
	
	if($nota1 >= 5 || $nota2 >=5){
			echo "Nota1 o nota2 aprobadas";
			echo "<p> </p>";
	}
	
	if($nota1 >= 5 || $nota2 >=5){
			echo "Nota1 o nota2 aprobadas";
			echo "<p> </p>";
	}
?>
</body>
</html>