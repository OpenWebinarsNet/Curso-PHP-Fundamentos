<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	$array = array(1, 2, 3, 4);
	$valores = array("uno" => 1,"dos" => 2,"tres" => 3,"diecisiete" => 17);

	//Estructuras de control de flujo de repetición

	//Recorrer un array
	foreach ($array as $valor) {
		echo $valor;
		echo "<p> </p>";
	}
	
	echo "<p> </p>";
	
	//Recorrer un array asociativo

	foreach ($valores as $k => $v) {
		echo "valores[$k] => $v.\n";
		echo "<p> </p>";
	}
	
?>
</body>
</html>