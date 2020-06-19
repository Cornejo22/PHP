/*Hacer una pagina PHP que contenga una funcion media que recibe 4 nuemros como parametros y
 devuelve el valor medio de los 4 parametros recibidos (nota la media de 4 numeros es la
 suma de los 4 dividida entre 4).*/

<?php

function media($num_1, $num_2, $num_3, $num_4)
{
    $media = -1;

    $media = ($num_1 + $num_2 + $num_3 + $num_4);

    $media = $media / 4;

    return $media;
}


