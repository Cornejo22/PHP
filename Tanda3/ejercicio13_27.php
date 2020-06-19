<!-- Un numero primo es aquel que solo es divisible entre 1 y entre si mismo. 
Hacer una pagina PHP que muestre por pantalla si un numero es o no primo. -->

<?php
$num = 16;
$primo = 0;

for ($i = 2; $i <= $num; $i++) {
	if($num % $i == 0){
		$primo++;
	}
}

if ($primo == 2) {
	echo "El numero $num es primo";
} else {
	echo "El numero $num no es primo";
}

?>