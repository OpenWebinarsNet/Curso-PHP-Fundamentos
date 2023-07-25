<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	$num1 = 5;
	$num2 = 10;
	$num3 = 5;
	$valor1 = "5";
	
	echo "<strong>num1</strong>: " . $num1;
	echo "<p> </p>";
	echo "<strong>num2</strong>: " . $num2;
	echo "<p> </p>";
	echo "<strong>num3</strong>: " . $num3;
	echo "<p> </p>";
	echo "<strong>valor1</strong>: " . $valor1 . " (string) ";
	echo "<p> </p>";
	
	//==
	if($num1 == $num2){
			echo "Iguales num1 y num2";
			echo "<p> </p>";
	}
	
	//==
	if($num1 == $num3){
			echo "Iguales num1 y num3";
			echo "<p> </p>";
	}
	
	//==
	if($num1 == $valor1){
			echo "Iguales num1 y valor1";
			echo "<p> </p>";
	}
	
	//=== Iguales en valor y en tipo
	if($num1 === $valor1){
			echo "Idénticos num1 y valor1";
			echo "<p> </p>";
	}
	
	//!=
	if($num1 != $num2){
			echo "Distintos num1 y num2";
			echo "<p> </p>";
	}
	
	//<>
	if($num1 <> $num2){
			echo "Distintos num1 y num2";
			echo "<p> </p>";
	}
	
	//=== Distintos en valor y en tipo
	if($num1 !== $valor1){
			echo "No idénticos num1 y valor1";
			echo "<p> </p>";
	}
	
	//>
	if($num2 > $num1){
			echo "num2 es mayor que num1";
			echo "<p> </p>";
	}
	//>=
	if($num1 >= $num3){
			echo "num1 es mayor o igual que num3";
			echo "<p> </p>";
	}
	
?>
</body>
</html>