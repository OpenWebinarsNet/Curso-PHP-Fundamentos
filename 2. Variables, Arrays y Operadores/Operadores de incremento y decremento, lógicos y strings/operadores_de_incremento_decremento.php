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
	
	echo "<strong>num1</strong>: " . $num1;
	echo "<p> </p>";
	echo "<strong>num2</strong>: " . $num2;
	echo "<p> </p>";
	
	// $variable++
	echo " \$variable++ ";
	// Secuencia de escape \
	echo "<p> </p>";
	echo $num1++;
	echo "<p> </p>";
	echo $num1;
	echo "<p> </p>";
	
	// ++$variable
	echo " ++\$variable ";
	echo "<p> </p>";
	echo ++$num2;
	echo "<p> </p>";
	echo $num2;
	echo "<p> </p>";
	
	// $variable--
	echo " \$variable-- ";
	echo "<p> </p>";
	echo $num1--;
	echo "<p> </p>";
	echo $num1;
	echo "<p> </p>";
	
	// --$variable
	echo " --\$variable ";
	echo "<p> </p>";
	echo --$num2;
	echo "<p> </p>";
	echo $num2;
	echo "<p> </p>";
	
	
?>
</body>
</html>