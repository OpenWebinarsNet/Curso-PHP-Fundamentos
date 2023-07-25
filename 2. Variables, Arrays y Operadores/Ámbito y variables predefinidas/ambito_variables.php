<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	// Variable de ámbito global
	$num = 22;
	
	function prueba()
	{	
		// Mostramos la variable de ámbito local
		echo $num; 
		//No muestra nada y produce un error
	}

	prueba();
	
	function prueba2()
	{
			//Variable de ámbito local
			$valor = 10;
			echo $valor;
	}
	
	prueba2();
	
	//Mostramos la variable de ámbito local a la función prueba2
	echo $valor;
	//No muestra nada y produce un error
?>
</body>
</html>