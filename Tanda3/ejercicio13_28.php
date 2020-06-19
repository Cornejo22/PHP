<!-- Hacer una pagina PHP que muestre los 20 primeros terminos de la sucesion de Fibonacci.
La sucesion de Fibonacci se caracteriza por tener el primer elemento: 1, el segundo elemento:
se forman sumando los 2 terminos anteriores -> 1, 1, 2, 3, 5, ... -->

<?php
$n1 = 1;
$n2 = 0;
for ($i = 0; $i < 20; $i++) {
    $suma = $n1 + $n2;
    $n1 = $n2;
    $n2 = $suma;
    echo $suma;
    if ($i < 19) {
        echo ", ";
    }
}
?>