<?php

/**
 * Tenemos dos cadenas $cadena1, con valor 
 * "hola a todo el mundo, y $cadena2, con valor "mi nombre es nombre y apellidos del alumno/a". 
 * Se pide: 
 * a. 	$cadena3 contendrá el valor de la concatenación de $cadena1 y $cadena2, 
 * mostrar por pantalla el contenido de $cadena3.
 * b.	$cadena1 contendrá el resultado de la concatenación de si misma con $cadena2, 
 * mostrar por pantalla el contenido de $cadena1.
 */

 $cadena1 = "hola a todo el mundo ";
 $cadena2 = "mi nombre es Sergio y mis apellidos son Casaus Quemada";
 $cadena3 = $cadena1 . $cadena2;
 $cadena1 .= $cadena2;

 echo $cadena3;
 echo "<br>";
 echo $cadena1;
