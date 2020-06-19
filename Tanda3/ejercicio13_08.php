<?php

/**
 * Partiendo de 2 variables $primera y $segunda con valores 10 y 2, 
 * respectivamente, hacer una página PHP que calcule: 
 * 
 * a. 	La diferencia de $primera menos $segunda.
 * b. 	La división de $primera entre $segunda. 
 */

$primera = 10;
$segunda = 2;

$resta = $primera - $segunda;
$division = $primera / $segunda;

echo "La diferencia de " . $primera . " - " . $segunda . " = " . $resta . "<br>";

echo "La división de " . $primera . " / " . $segunda . " = " . $division;
