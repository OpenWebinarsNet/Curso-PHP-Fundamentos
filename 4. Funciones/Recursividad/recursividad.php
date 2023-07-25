<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	
	//Recursividad
	
	function factorial($n){
		if($n==1){
			return 1;
		}
		else
		{
			echo $n . " x ";
			return $n * factorial($n-1);
			
		}
	}
 
	$resultado = factorial(9);
	echo "<p> </p>";
	echo $resultado
?>
</body>
</html>