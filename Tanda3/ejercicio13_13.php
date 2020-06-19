<!-- Hacer una pagina PHP que tenga dos variables y nos indique si la suma de los numeros es mayor que el producto
de ellos o al contrario. Ejemplo:
$numero1=1; $numero2=2 -> la suma es mayor que el producto
$numero1=3; $numero2=2 -> el producto es mayor que la suma -->
<?php

$num1 = 2;
$num2 = 2;

$num3 = 1;
$num4 = 5;

$suma = $num1 + $num2;
$producto = $num1 * $num2;

if($suma > $producto){
	echo "La suma es mayor que el producto";
}
else{
	if($suma < $producto){
		echo "El producto es mayor que la suma";
	}
	else{
		echo "La suma es igual al producto";
	}
}

?>