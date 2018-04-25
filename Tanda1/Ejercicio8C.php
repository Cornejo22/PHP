<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
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
<h1>Ejercicio 8</h1>
<!--Realiza un conversor de euros a pesetas. 
La cantidad en euros que se quiere convertir deberá estar almacenada en una variable.-->

<?php
    $euros = $_POST["aConvertir"];
    $pesetas = $euros * 166;

    echo "<p> Euros : " . $euros . " --  Pesetas : " . $pesetas . " pesetas </p>"; 
?>

<button><a href="Ejercicio8.php">Volver al Convertidor</a></button>
    
</body>
</html>