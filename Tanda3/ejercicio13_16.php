<!-- Hacer una página PHP que muestre por 
pantalla la tabla de multiplicar de una variable (desde el 1 al 10). -->
<?php
$variable = 2;
$i = 1;
echo "<table style='text-align:center; margin:0 auto !important;'>
<tr><th>Tabla de Multiplicar del " . $variable . "</th></tr><tr>";
while ($i <= 10) {
  echo "<td style='border:solid 1px black;'>" . $variable . "*" . $i . "=" . ($variable * $i) . "</td></tr>";
  $i++;
}
echo "</table>";
