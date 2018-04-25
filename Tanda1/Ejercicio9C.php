<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
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
<h1>Ejercicio 9</h1>
<!--Realiza un conversor de euros a pesetas. 
La cantidad en euros que se quiere convertir deberá estar almacenada en una variable.-->

<?php
    $pesetas = $_POST["aConvertir"];
    $euros = $pesetas / 166;

    echo "<p> Pesetas : " . $pesetas . " --  Euros : " . $euros . " euro/s </p>"; 
?>

<button><a href="Ejercicio9.php">Volver al Convertidor</a></button>
    
</body>
</html>