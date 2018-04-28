<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
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

    <h1>Ejercicio 3</h1>

<?php
    $altura = $_POST["altura"];
    $base = $_POST["base"];

    echo "El resultado es : " . (($base * $altura)/2);
?>

<br/><br/>
<button><a href="Ejercicio03A.html">Volver</a></button>
    
</body>
</html>