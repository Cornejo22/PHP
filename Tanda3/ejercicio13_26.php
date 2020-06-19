<!-- Hacer una pagina PHP que muestre por pantalla todos los divisores
(aquellos cuyo resto de la division es 0) de un numero guardado
en una variable. Ej.: 16 -> sus divisores son: 1, 2, 4, 6, 16. -->

<?php

$variable = 16;

for ($i = 1; $i <= $variable; $i++) {
	if ($variable % $i == 0) {
		if ($i == $variable) {
			echo $i;
		} else {
			echo $i . ",";
		}
	}
}

?>