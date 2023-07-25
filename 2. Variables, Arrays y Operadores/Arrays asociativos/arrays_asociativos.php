<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Arrays definiendo keys 
	
	$exploradores = array( "explorador1" => "Chrome", "explorador2" => "Firefox", "explorador3" => "Safari" );
    $datos = array( "nombre" => "Luisja", "edad" => 39, "profesor" => true, 3 => 100 );
	
    echo "<strong>Explorador 3: </strong> ".$exploradores["explorador3"];
	echo "<p> </p>";
	
    echo "<strong>Nombre: </strong>".$datos["nombre"];
	echo "<p> </p>";
	
    echo "<strong>3:</strong> ".$datos[3];
	echo "<p> </p>";
	
	var_dump($exploradores);
	echo "<p> </p>";
	
	var_dump($datos);
	echo "<p> </p>";
	
?>
</body>
</html>