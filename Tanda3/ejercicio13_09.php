<?php

/**
 * Partiendo de 2 variables $primera y $segunda con valores 4 y 8, 
 * respectivamente, hacer una página PHP que calcule:
 * 
 * a.	$primera elevada a $segunda.
 * b.	Raíz cuadrada de $primera. 
 * c.	Raíz cuadrada de $segunda. 
 *  
 */

$primera = 10;
$segunda = 2;

$elevada = $primera ** $segunda;
$raiz_cuadrada_primera = sqrt($primera);
$raiz_cuadrada_segunda = sqrt($segunda);

echo "El primer número (" . $primera . ") elevado al segundo (" . $segunda . ") es " . $elevada . "<br>";

echo "La raiz cuadrada de " . $primera . " es " . $raiz_cuadrada_primera . "<br>";

echo "La raiz cuadrada de " . $segunda . " es " . $raiz_cuadrada_segunda . "<br>";
