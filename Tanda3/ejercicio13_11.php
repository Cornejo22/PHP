<?php

/* Práctica 3.11: Se pide realizar un generador para una apuesta del juego Euromillones.
Para una apuesta hay que obtener al azar cinco números principales de una lista
del (1 al 50) y además otros dos números de una lista de nueve (del 1 al 9)llamados <<estrellas>>.*/

echo '<h1>GENERADOR EUROMILLONES</h1>';
echo "Número aleatorio: ".rand(1,50).' '.rand(1,50).' '.rand(1,50).' '.rand(1,50).' '.rand(1,50).' ';
echo "<br/>";
echo "Números estrella: ".rand(1,9).' '.rand(1,9);
?>