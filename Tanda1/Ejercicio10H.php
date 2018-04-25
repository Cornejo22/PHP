<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 10</title>
    <style>
    
    a{
        text-decoration: none;
        color:black;
    }
    a:hover{
        color:red;
    }

    </style>
</head>
<body>

<h1>Ejercicio 10</h1>

<!--Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. 
La base de la pirámide debe estar formada por 9 asteriscos.
-->

<?php

$altura = $_POST["estrellitas"];
$lineas = $altura + 4;
for ($i = 0; $i < $altura; $i++) 
{
    for ($j = 0; $j < $lineas; $j++) 
    {
        if ($j == 0 || $j == $lineas) 
        {
            echo " ";
        }
        else
        {
            echo "*";    
        }
    }
    echo "<br/>";
}

?>

<button><a href="Ejercicio10.php">Volver a calcular estrellitas</a></button>
    
</body>
</html>