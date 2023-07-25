<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	
	//Funciones de Fecha y Hora
	
	$hoy = getdate();
	var_dump($hoy);
	
	if($hoy['month'] == "January"){
			echo "Enero";
	}
?>
</body>
</html>