<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	//Funciones de Arrays 
	
	$numeros1 = array( 11, 22, 33);
    $numeros2 = array( 11, 33, 55);
	
    $colores1 = array( "color1" => "rojo", "color2" => "verde", "color3" => "azul", "color4" => "naranja" );
    $colores2 = array( "color1" => "verde", "color2" => "azul", "color3" => "amarillo" );
	
    $diferencias1 = array_diff( $numeros1, $numeros2 );
    $diferencias2 = array_diff( $colores1, $colores2, $colores3 );
	 
    // Devuelve: Array ( [1] => 22 )
	var_dump($diferencias1);
    echo "<p> </p>";
	
    // Devuelve: Array ( [color4] => naranja )
    var_dump( $diferencias2 );
	echo "<p> </p>";
	
?>
</body>
</html>