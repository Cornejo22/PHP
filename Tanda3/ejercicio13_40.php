/*Crear una fichero que incluya dentro de el una llamada con require_once() a
la Actividad 13.36, comprobando cada una de las funciones.*/

<?php

require_once('ejercicio13_36.php');

$numero = 1;
echo (primo($numero));

$num_1 = 3;
$num_2 = 3;
$num_3 = 3;
$num_4 = 9;
echo ("La media de " . $num_1 . " , " . $num_2 . " , " . $num_3 . 
" , " . $num_4 . " es : " . media($num_1, $num_2, $num_3, $num_4) . "<br>") ;

$cadena = "Esto es el ejercicio13.40";
echo ("La cadena : '''" . $cadena . "''' tiene " . 
cuenta_vocales($cadena) . " vocales. <br>");

cuadrado('K',3);