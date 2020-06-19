<!-- Hacer una página PHP que muestre una figura 
similar a la siguiente. NOTA: solo está permitido el 
uso de un * en todo el código.
 *
 **
 ***
 ****
 *****
 ******
 -->


<?php

$tam = 6;
$i = 0;
$j = 0;

while ($i < $tam) {
    while ($j < $tam - $i - 1) {
        echo ' ';
        $j++;
    }
    $j = 0;
    while ($j <= $i) {
        echo '*';
        $j++;
    }

    $j = 0;
    echo '<br>';
    $i++;
}

?>