<?php


/* Hacer una página PHP que contenga una función cuadrado que recibe 2 parámetros, 
un carácter (que puede ser cualquiera) y un número, 
la función debe mostrar por pantalla un cuadrado con el carácter recibido 
(tantas filas y columnas como indique el número). */



function cuadrado($caracter, $numero)
{


    if (strlen($caracter) == 0) {
        echo "No ha introducido carácter";
    } else {
        if (strlen($caracter) == 1) {
            for ($i = 0; $i < $numero; $i++) {
                for ($j = 0; $j < $numero; $j++) {
                    echo $caracter;
                }
                echo "<br>";
            }
        } else {
            echo "Demasiados carácteres";
        }
    }
}
