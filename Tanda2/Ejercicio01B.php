<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1 Tanda2</title>
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

<h1>Ejercicio 1</h1>
<!--Ejercicio T1-01
Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.-->

<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

echo "<p> El resultado es : " . ($n1 * $n2);
?>
<br/><br/>
<button><a href="Ejercicio01A.html">Volver</a></button>

    
</body>
</html>