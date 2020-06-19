/*Hacer una pagina PHP que para una nota almacenada en una variable,
muestre por pantalla lo siguiente:*/


<?php

function compruebaNota($nota)
{
    $string = "";
    if ($nota < 5) {
        $string = "suspenso";
    } else {
        if ($nota >= 5 && $nota < 6) {
            $string = "aprobado";
        }
        else {
            if ($nota >= 6 && $nota < 7) {
                $string = "bien";
            }else {
                if ($nota >= 7 && $nota <= 8) {
                    $string = "notable";
                }else {
                    if ($nota > 8) {
                        $string = "sobresaliente";
                    }
                }
            }
        }
    }
    
    return $string;
}

echo(compruebaNota(6.25));
