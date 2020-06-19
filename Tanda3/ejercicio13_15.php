<!-- Hacer un programa en PHP que muestre por pantalla 
los números del 1 al 100 separados por coma ",". -->


<?php
$i = 1;

while ($i <= 100) {
	
	if ($i == 100) {
		echo $i;
	}
	else{
		echo $i . " ,";
	}
	$i++;
}

?>