/*Hacer un formato PHP que pida una serie de datos: nombre, apellidos, direccion, telefono, poblacion y provincia.
Este formulario enviara los datos a otra pagina PHP mediante el metodo POST. La pagina que recibe
los datos debe mostrar los datos recibidos por pantalla.*/

<?php

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$poblacion = $_POST['poblacion'];
$provincia = $_POST['provincia'];

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
