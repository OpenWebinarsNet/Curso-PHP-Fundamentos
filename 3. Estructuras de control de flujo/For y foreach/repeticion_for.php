<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	$num = 5;

	//Estructuras de control de flujo de repetición

	//Números del 1 al 10
	for ($i=1;$i<=10;$i++){
		echo $i;
		echo "<br/>";
	}
	
	echo "<p> </p>";
	
	//Números del 10 al 1
	for ($j=10;$j>=1;$j--){
		echo $j;
		echo "<br/>";
	}
	
	echo "<p> </p>";
	
	//Números pares entre el 0 y el 10
	for ($k=0;$k<=10;$k=$k+2){
		echo $k;
		echo "<br/>";
	}
	
	echo "<p> </p>";
	
	//Números pares entre el 0 y el 10
	for ($i=0;$i<=10;$i++){
		if($i%2 == 0){
			echo $i;
			echo "<br/>";
		}
	}
	
	echo "<p> </p>";
	
	//Tabla de multiplicar
	for ($i=1;$i<=10;$i++){
		echo $num . " x " . $i . " = " . $i * $num;
		echo "<br/>";
	}
?>
</body>
</html>