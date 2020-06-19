<!-- Hacer una página PHP que muestre una figura similar a la siguiente.
 NOTA: solo está permitido el uso de un * en todo el código.
 *
 **
 ***
 ****
 *****
 ****** -->

<?php

$tam = 10;

for ($i = 0; $i < $tam; $i++) {

    for ($j = 0; $j < $tam - $i - 1; $j++) echo ' ';

    for ($j = 0; $j <= $i; $j++) echo '*';

    echo '<br />';
}

?>