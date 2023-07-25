<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	
	const NOMBRE = "admin";
	$password = 1234;
	$temario = ["Variables", "Estructuras", "Funciones", "Frameworks"];
	
	function calcular_letra($dni){
		$letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E","T"];
		$posicion = $dni%23;
		echo("Tu letra es del dni: " . $letras[$posicion]);
		echo "<p> </p>";
	}
	
	
    switch($_GET["eleccion"])
    {
         case 1:
            if(NOMBRE == "admin"){
				echo "Usuario correcto";
				if($password != 1234){
					echo "Password correcta";
				}
				elseif($password == 0000){
					echo "Modifica tu password";
				}
			}
			else{
				echo "Usuario incorrecto";
			}
            break;
        case 2:
            include 'final.php';
            break;
        case 3:
            echo "Se está ejecutando el siguiente fichero ". $_SERVER['PHP_SELF'];
            break;
        case 4:
            $elementos = count($temario);
			
			echo "Temario completo <br />";
			$i = 0;
			while ($i < $elementos)
			{
				echo $temario[$i] ."<br />";
				$i++;
			}
			
			echo "<p> </p>";
			
			$eliminada = array_pop($temario);
			echo "Temario sin el último tema: ".$eliminada . " <br />";
			$elementos = count($temario);
			$j = 0;
			while ($j < $elementos)
			{
				echo $temario[$j] ."<br />";
				$j++;
			}
			
			echo "<p> </p>";
			
            break;
        case 5:
             $monedapais = array(
				array('pais' => 'España', 'moneda' => 'Euro'),
				array('pais' => 'Reino Unido', 'moneda' => 'Libra'),
				array('pais' => 'EEUU', 'moneda' => 'Dolar'),
				array('pais' => 'Francia', 'moneda' => 'Euro'),
				array('pais' => 'Portugal', 'moneda' => 'Euro')
			);
			sort($monedapais);
			foreach ($monedapais as $elemento){
				if($elemento['moneda'] != "Dolar"){
					var_dump($elemento);
				}
			}
            break;
        case 6:
            calcular_letra(71276958);
            break;
        case 7:
            echo date("Y");
            break;
         default:
            echo "Valor no válido";
    }
	
	
	

	
?>
<a href="final.php">Volver al menú</a>
</body>
</html>