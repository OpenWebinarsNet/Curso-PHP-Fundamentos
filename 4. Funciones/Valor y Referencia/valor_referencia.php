<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	
	//Valor y Referencia
	
	function miFuncion($num1) {  
		$num1 = $num1 + 2;    
	}  
	
	function otraFuncion(&$num1) {  
		$num1 = $num1 + 2;    
	}
  
	$num1 = 4;  
  
  
	//Paso por valor
	
	miFuncion($num1);  
	echo $num1; //Muestra 4  
  
	echo "<p> </p>";
  
	otraFuncion($num1); 
	echo $num1; //Muestra 6  
  
	
?>
</body>
</html>