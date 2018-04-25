<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>

    <style>
        
        *{
            color:indigo;
        }

        table{
            border:solid 2px red;
        }

        table th{
            border:solid 2px black;
        }

        table tr td{
            border:solid 2px black;
        }

    </style>

</head>
<body>

<h1>Ejercicio 4</h1>
<!--Escribe un programa que muestre tu horario de clase mediante una tabla. 
Aunque se puede hacer íntegramente en HTML (igual que los ejercicios anteriores), 
ve intercalando código HTML y PHP para familiarizarte con éste último.-->

<table>

    <?php

        echo"<tr><th>Horario</th><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th></tr>";
        $hora = 8;
        $asignatura = ["AsignaturaA","AsignaturaB","AsignaturaC","AsignaturaD","AsignaturaE"];

        for ($i=0; $i <= 2 ; $i++) {
            echo"<tr><td>".$hora.":15-".++$hora.":15</td>";

            for ($j=0; $j <= 4 ; $j++) { 
                $aleatorio = rand(0,count($asignatura)-1); 
                echo"<td>".$asignatura[$aleatorio]."</td>";
            }
            echo"</tr>";
            
        }
        echo"<tr><th>11:15-11:45</th><td style='text-align:center;' colspan='5'>RECREO</td></tr>";


        for ($i=0; $i <= 2 ; $i++) {
            echo"<tr><td>".$hora.":45-".++$hora.":45</td>";

            for ($j=0; $j <= 4 ; $j++) { 
                $aleatorio = rand(0,count($asignatura)-1); 
                echo"<td>".$asignatura[$aleatorio]."</td>";
            }
            echo"</tr>";

        }
        

    ?>

</table>
    
</body>
</html>