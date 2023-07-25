<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	$valor1 = 10;
	$valor2 = 5;
	
	function prueba()
	{
			//Utilizamos la palabra clave global y las variables ya son accesibles desde la función
			global $valor1, $valor2;
			$valor1 = $valor1 + $valor2;
		
	}
	
	prueba();
	
	
	echo $valor1;
	
?>
</body>
</html>