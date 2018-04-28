<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

    <h1>Ejercicio 4</h1>
  
<?php
    $resultado;
    $radio = pow($_POST["radio"],2);
    $altura = $_POST["altura"];
    $pi =pi();
    $resultado = $pi * $radio * $altura;

    echo "El resultado es : " . $resultado;
?>

<br/><br/>
<button><a href="Ejercicio04A.html">Volver</a></button>
</body>
</html>