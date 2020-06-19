<!-- Hacer una pagina PHP que tenga dos varaibles y segun el valor de dichas variables realizase los siguientes apartados:
a.Si el valor de la primera variable es mator que 0 y el valor de la segunda menor que la primera, mostrará el nombre del alumno/a.
b.Si el valor de la primera variable es mayor que 0 y el valor de la segunda es mayor o igual que la primera, mostrara los apellidos del alumno/a. 
c.Si el valor de la primera variable es menor que 0, mostrará el nombre y apellidos completos del alumno/a, independientemente del valor de la segunda variable. -->

<?php
$var1=1;
$var2=2;
if ($var1 > 0 && $var2 < $var1){
	echo "Daniel";
}
if ($var1 > 0 && $var2 >= $var1){
		echo "Sánchez Jiménez";
}
if ($var1 < 0){
	echo "Daniel Sánchez Jiménez";
}
?>


		