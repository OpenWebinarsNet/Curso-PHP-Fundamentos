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
	$num3 = 0;
	
	//Asignación básica
	$num3 = $num1;
	echo $num3;
	echo "<p> </p>";
	
	//+=
	echo $num1 . " += " . $num2 . " => " .$num1+=$num2;
	echo "<p> </p>";
	
	//-=
	echo $num1 . " -= " . $num2 . " => " .$num1-=$num2;
	echo "<p> </p>";
	
	//*=
	echo $num1 . " *= " . $num2 . " => " .$num1*=$num2;
	echo "<p> </p>";
	
	///=
	echo $num1 . " /= " . $num2 . " => " .$num1/=$num2;
	echo "<p> </p>";
	
	//%=
	echo $num1 . " %= " . $num2 . " => " .$num1%=$num2;
	echo "<p> </p>";
	
?>
</body>
</html>