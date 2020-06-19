/*Hacer una pagina PHP que contenga una funcion primo que recibe un numero
como parametro y devuelve los siguientes resultados:*/


<?php



function primo($numero)
{

    $total = 0;
    $cadena = "No es primo";
    $i = 1;
    while ($i <= $numero) {
        if ($numero % $i  == 0) {
            $total++;
        }
        $i++;
    }

    if($total == 2){
        $cadena = "Es primo";
    }

    return $cadena . "<br>";
}
