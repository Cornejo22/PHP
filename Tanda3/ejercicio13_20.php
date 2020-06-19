<!-- Un numero primo es aquel que solo es divisible 
entre 1 y entr si mismo. 
Hacer una pagina PHP que muestre por pantalla 
si un numero es o no primo. -->

<?php
$num=13;
$i=2;
$primo=true;
while ($primo && $i<$num) {
	$primo=($num%$i) !=0;
	$i++;
}
if ($primo) {
	echo "El numero $num es primo";
}
else {
	echo "El numero $num no es primo";
}

?>