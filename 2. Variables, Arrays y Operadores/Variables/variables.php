<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	//Variable de tipo integer
	$edad = 39;
	//Variable de tipo float
	$estatura = 1.67;
	//Variable de tipo string
	$nombre = "Luisja";
	$frase = "Luisja tiene $edad años";
	$frase2 = 'Luisja tiene $edad años';
	//Variable de tipo boolean
	$profesor = false;
	
	//Definiciones incorrectas 
	
	
	//Definiciones que dan origen a confusión
	$for = 22;
	$break = "Pedro";
	
	echo "<p>" . $edad . "</p>";
	echo "<p>" . $estatura . "</p>";
	echo "<p> Tu nombre es " . $nombre . "</p>";
	echo "<p>" . json_encode($profesor) . "</p>";
?>
</body>
</html>