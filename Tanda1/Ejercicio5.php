<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>
<body>

<h1>Ejercicio 5</h1>
<!--Escribe un programa que utilice las variables $x y $y. 
Asignales los valores 144 y 999 respectivamente. A continuación, muestra por pantalla el valor de cada variable, 
la suma, la resta, la división y la multiplicación.
-->    

<?php

$x = 144;
$y = 999;

echo "<p> ". $x ." + " . $y . " = " . ($x + $y) . "</p>";
echo "<p> ". $x ." - " . $y . " = " . ($x - $y) . "</p>";
echo "<p> ". $x ." x " . $y . " = " . ($x * $y) . "</p>";
echo "<p> ". $x ." / " . $y . " = " . ($x / $y) . "</p>";


?>



</body>
</html>