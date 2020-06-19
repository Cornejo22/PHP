<!-- Hacer una pagina PHP que compruebe el contenido de una variable es PAR o IMPAR 
(recordad que en un número par su resto de la division entre 2 es 0) -->

<html>
	<head>
		<title>Ejercicio 12</title>
	</head>
	<body>
	<?php
		$numero = 69;

		if ($numero%2==0){
			echo "el $numero es par";
		}else{
			echo "el $numero es impar";
		}
	?>
	</body>
</html>