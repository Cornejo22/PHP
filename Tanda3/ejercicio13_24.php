<!-- Hacer una pagina PHP que muestre por pantalla los numeros 
del 100 al 0 en orden descendente, dando el salto de 2 en 2 numeros.
Es decir, 100, 98, 96, 94, ..., 2, 0. -->

<?php

for ($i = 100; $i >= 0; $i = $i - 2) {
   echo $i . "<br>";
}

?>