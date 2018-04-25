<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio3 </title>
    <style>
        *{
            text-align: center;
            margin:auto;
        }
        table tr td{
            border :solid 1px black;
        }
    </style>
</head>
<body>

<h1>Ejercicio 3</h1>
<!--Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente traducción al castellano. 
Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta `<table>` de HTML.-->

<table style="border:solid 1px black;">

    <?php
    $arrayC = ["Juego", "Mama", "Papa", "Hermano", "Hermana", "Abuelo", "Abuela", "Perro", "Gato", "Pez"];
    $arrayI = ["Game", "Mother", "Dad", "Brother", "Sister", "GrandFather", "GrandMother", "Dog", "Cat", "Fish"];
    echo"<tr><td>Castellano</td><td>Ingles</td></tr>";
        for ($i = 0; $i <= 9; $i++) {
            echo"<tr><td>".$arrayC[$i]."</td><td>".$arrayI[$i]."</td></tr>";
        }
    ?>

</table>
    
</body>
</html>