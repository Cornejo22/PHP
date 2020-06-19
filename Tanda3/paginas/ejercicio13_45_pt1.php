/*Hacer un formato PHP que pida una serie de datos: nombre, apellidos, direccion, telefono, poblacion y provincia.
Este formulario enviara los datos a otra pagina PHP mediante el metodo POST. La pagina que recibe
los datos debe mostrar los datos recibidos por pantalla.*/

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13.44</title>
</head>

<body>

    <div style="width:max-content; margin:2% auto; text-align:center;">
        <h1>Formulario de contacto</h1>
        <form action="ejercicio13_45_pt2.php" method="post" style="width:max-content; margin:2% auto;">
            <input style="display:flex; margin-bottom:10px;" type="text" name="nombre" placeholder="Introduzca el nombre">
            <input style="display:flex; margin-bottom:10px;" type="text" name="apellidos" placeholder="Introduzca el apellido">
            <input style="display:flex; margin-bottom:10px;" type="text" name="direccion" placeholder="Introduzca la dirección">
            <input style="display:flex; margin-bottom:10px;" type="text" name="telefono" placeholder="Introduzca el teléfono">
            <input style="display:flex; margin-bottom:10px;" type="text" name="poblacion" placeholder="Introduzca la población">
            <input style="display:flex; margin-bottom:10px;" type="text" name="provincia" placeholder="Introduzca la provincia">
            <button type="submit">Enviar</button>
        </form>
    </div>

</body>

</html>