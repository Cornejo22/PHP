<!-- Hacer una página PHP que muestre por pantalla 
todos los divisores (aquellos cuyo resto de la division es 0) de un
número guardado en una variable. Ej.: 16 -> 
sus divisores son: 1, 2, 4, 6, 16. -->

<?php
$divisor = 16;
echo "Los divisores del " . $divisor . " son los siguientes <br>";
$i = 1;

while ($i <= $divisor) {
    if ($divisor % $i == 0) {
        echo $i . "<br>";
    }
    $i++;
}

?>