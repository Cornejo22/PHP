<!-- Hacer una pagina PHP que muestre por 
pantalla los números del 100 al 0 en orden descendente,
dando el salto de 2 en 2 números. 
Es decir, 100, 98, 96, 94, ..., 2, 0. -->

<?php
$i = 100;
while ($i >= 0) {
   echo $i . '<br />';
   $i -= 2;
}
?>