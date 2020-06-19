/*Hacer un formato PHP que pida una serie de datos: nombre, apellidos, direccion, telefono, poblacion y provincia.
Este formulario enviara los datos a otra pagina PHP mediante el metodo GET. La pagina que recibe
los datos debe mostrar los datos recibidos por pantalla.*/

<?php

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$direccion = $_GET['direccion'];
$telefono = $_GET['telefono'];
$poblacion = $_GET['poblacion'];
$provincia = $_GET['provincia'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <h1>Datos de la persona</h1>
    <p>Nombre : <?php echo($nombre);?></p>
    <p>Apellidos : <?php echo($apellidos);?></p>
    <p>Dirección : <?php echo($direccion);?></p>
    <p>Teléfono : <?php echo($telefono);?></p>
    <p>Población : <?php echo($poblacion);?></p>
    <p>Provincia : <?php echo($provincia);?></p>
    
</body>
</html>
