<!-- Hacer una página PHP que muestre por pantalla 
la tabla de multiplicar de una variable (desde el 1 al 10). -->

<?php
$variable = 2;
echo "<table><tr>";
for ($i=1; $i <= 10 ; $i++) { 
  echo "<td style='border:solid 1px black;'>" .
   $variable . "*" . $i . "=" . ($variable * $i) . "</td></tr>";
}

echo "</table>";
?>