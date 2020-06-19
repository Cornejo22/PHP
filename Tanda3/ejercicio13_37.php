<!-- Crear un fichero que incluya dentro
 de el una llamada con include() a
la actividad anterior, comprobando 
cada una de las funciones. -->

<?php

include('ejercicio13_36.php');

$numero = 12;
echo (primo($numero));

$num_1 = 5;
$num_2 = -4;
$num_3 = 52;
$num_4 = 3;
echo ("La media de " . $num_1 . " , " . $num_2 . " , " . $num_3 . 
" , " . $num_4 . " es : " . media($num_1, $num_2, $num_3, $num_4) . "<br>") ;

$cadena = "LA tíá lOlÓ va al sIUUASASupEÉ";
echo ("La cadena : '''" . $cadena . "''' tiene " . 
cuenta_vocales($cadena) . " vocales. <br>");

cuadrado('#',3);