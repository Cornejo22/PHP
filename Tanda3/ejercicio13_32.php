<?php

//Esto es un comentario <---

/* Hacer una página PHP que contenga una función cuentavocales 
que recibe una cadena de texto y muestra
por pantalla el número de vocales totales que 
tiene la cadena (recordad que una cadena de texto se 
comporta como un array de caracteres).*/



function cuenta_vocales($cadena)
{
    $cadena_aux = sanear_string($cadena);
    $cadena_aux = strtolower($cadena_aux);
    $total = 0;

    //Asi se recorre un array de caracteres (es decir una frase o cadena)
    for ($i = 0; $i < strlen($cadena_aux); $i++) {
        //Caracter a caracter
        if (
            $cadena_aux[$i] == 'a' || $cadena_aux[$i] == 'e'
            || $cadena_aux[$i] == 'i' || $cadena_aux[$i] == 'o'
            || $cadena_aux[$i] == 'u' 
        ) {
            //Esto suma en 1
            $total = $total + 1;
        }
    }


    return $total;
}

/**
 * Reemplaza todos los acentos por sus equivalentes sin ellos
 *
 * @param $string
 *  string la cadena a sanear
 *
 * @return $string
 *  string saneada
 */
function sanear_string($string)
{
 
    $string = trim($string);
 
    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );
 
    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );
 
    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );
 
    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );
 
    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
 
    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C',),
        $string
    );
 
 
    return $string;
}
