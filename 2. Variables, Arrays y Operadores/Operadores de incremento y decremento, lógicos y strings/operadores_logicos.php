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
	$num4 = 20;
	$num5 = 5;
	$activo1 = true;
	$activo2 = false;
	
	echo "<strong>num1</strong>: " . $num1;
	echo "<p> </p>";
	echo "<strong>num2</strong>: " . $num2;
	echo "<p> </p>";
	echo "<strong>num3</strong>: " . $num3;
	echo "<p> </p>";
	echo "<strong>num4</strong>: " . $num4;
	echo "<p> </p>";
	echo "<strong>num5</strong>: " . $num5;
	echo "<p> </p>";
	echo "<strong>activo1</strong>: " . json_encode($activo1);
	echo "<p> </p>";
	echo "<strong>activo2</strong>: " . json_encode($activo2);
	echo "<p> </p>";
	
	// and
	if($num1 == $num3 and $num3 == $num5){
			echo "Iguales num1 y num3  Y  iguales num3 y num5";
			echo "<p> </p>";
	}
	
	// &&
	if($num1 == $num3 && $num3 == $num5){
			echo "Iguales num1 y num3  Y  iguales num3 y num5";
			echo "<p> </p>";
	}
	
	// &&
	if($num1 == $num3 && $num3 == $num4){
			echo "Iguales num1 y num3  Y  iguales num3 y num4";
			echo "<p> </p>";
	}
	
	// or
	if($num1 == $num3 or $num3 == $num4){
			echo "Iguales num1 y num3  O  iguales num3 y num4";
			echo "<p> </p>";
	}
	
	// or
	if($num1 == $num3 || $num3 == $num4){
			echo "Iguales num1 y num3  O  iguales num3 y num4";
			echo "<p> </p>";
	}
	
	// !
	if(!$activo1){
			echo "Activo1 es false";
			echo "<p> </p>";
	}
	
	// not
	if(!$activo2){
			echo "Activo2 es false";
			echo "<p> </p>";
	}
	
	// xor
	if($num1 == $num3 xor $num3 == $num4){
			echo "Iguales num1 y num3  XOR  iguales num3 y num4";
			echo "<p> </p>";
	}
	
	// xor
	if($num1 == $num3 xor $num3 == $num5){
			echo "Iguales num1 y num3  XOR  iguales num3 y num5";
			echo "<p> </p>";
	}
	
	
?>
</body>
</html>