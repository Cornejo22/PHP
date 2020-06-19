<!-- Crear una fichero que incluya
 dentro de el una llamada con require() a la
Actividad 13_36, comprobado cada una de las funciones. -->

<?php

require('ejercicio13_36.php');

$numero = 4;
echo (primo($numero));

$num_1 = 2;
$num_2 = 2;
$num_3 = 3;
$num_4 = 4;
echo ("La media de " . $num_1 . " , " . $num_2 . " , " . $num_3 . 
" , " . $num_4 . " es : " . media($num_1, $num_2, $num_3, $num_4) . "<br>") ;

$cadena = "LA tíá  va al sIUUASASupEÉ";
echo ("La cadena : '''" . $cadena . "''' tiene " . 
cuenta_vocales($cadena) . " vocales. <br>");

cuadrado('K',3);