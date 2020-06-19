<?php

/* Hacer una página PHP que contenga una función pirámide que recibe 2 parámetros, 
un carácter (que puede ser cualquiera) y un número, 
la función debe mostrar por pantalla una pirámide Invertida con el carácter recibido
(tantas filas y columnas como indique el número y de ahí descendiendo hasta 1). */

piramide('@', 4);

function piramide($caracter, $numero)
{
    for ($i = 0; $i < $numero; $i++) {
        for ($j = $numero - $i; $j > 0; $j--) {
            echo $caracter;
        }
        echo "<br>";
    }
}
