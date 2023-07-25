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
	
	//Suma
	$total = $num1 + $num2;
	echo $total;
	echo "<p> </p>";
	
	//Resta
	echo $num1 - $num2;
	echo "<p> </p>";
	
	//Multiplicación
	echo $num1 . " x " . $num2 . " = " . $num1 * $num2;
	echo "<p> </p>";
	
	//División
	echo $num1 . " / " . $num2 . " = " .$num1 / $num2;
	echo "<p> </p>";
	
	//Módulo o resto de una división
	echo $num1 . " % " . $num2 . " = " .$num1 % $num2;
	echo "<p> </p>";
	
	//Exponenciación
	echo $num1 . " elevado a " . $num2 . " = " .$num1 ** $num2;
	echo "<p> </p>";
	
?>
</body>
</html>