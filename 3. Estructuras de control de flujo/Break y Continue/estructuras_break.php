<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	
	//break

     for($i=1;$i<=10;$i++)
    {
        echo "Valor de i: ".$i."<br/>";
        if( $i == 3) {
             break;
        }
    }
	
	echo "<p> </p>";
	
	//break con argumento
	
	for($j=1;$j<=10;$j++)
    {
        echo "Valor de j: ".$j."<br/>";
		for($k=1;$k<=10;$k++)
		{
			echo "Valor de k: ".$k."<br/>";
			if( $k == 3) {
				//sale de los dos for
				break 2;  //Probar tb sin el argumento
        }
		}
        
    }
?>
</body>
</html>