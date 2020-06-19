<?php
session_start();
session_unset();
if (isset($_POST['enviar']) && $_POST['enviar'] == 'enviado') {
    if (isset($_POST['n_usuario']) && isset($_POST['password'])) {

        if ($_POST['n_usuario'] != 'usuario' ||  $_POST['password'] != 'usuario') {
            $_SESSION['error_credenciales'] = "Los credenciales son erroneos";
        } else {
            $_SESSION['n_usuario'] = $_POST['n_usuario'];
            $_SESSION['password'] = $_POST['password'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13_46</title>
    <style>
        * {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <?php if (
            isset($_SESSION['n_usuario'])  && $_SESSION['n_usuario'] == 'usuario'
            && isset($_SESSION['password'])  && $_SESSION['password'] == 'usuario'
        ) : ?>
            <?php ?>
            <a href="privada.php">Zona Privada</a>
            <a href="salir.php">Cerrar Sesión</a>
        <?php else : ?>
            <a href="ejercicio13_46.php">Recargar</a>
        <?php endif; ?>
    </nav>

    <?php if (
        isset($_SESSION['n_usuario'])  && $_SESSION['n_usuario'] == 'usuario'
        && isset($_SESSION['password'])  && $_SESSION['password'] == 'usuario'
    ) : ?>
        <p>La sesión ha sido iniciada por
            <?php echo ($_SESSION['n_usuario']); ?>
        </p>
    <?php else : ?>
        <?php if (isset($_SESSION['error_credenciales'])) : ?>
            <p><?php echo $_SESSION['error_credenciales']; ?></p>
        <?php endif; ?>
        <form action="" method="POST">
            <input type="text" name="n_usuario" id="n_usuario" placeholder="Usuario"><br>
            <input type="password" name="password" id="password" placeholder="Password"><br>
            <input type="hidden" name="enviar" value="enviado">
            <button type="submit">Iniciar Sesión</button>
        </form>
    <?php endif; ?>


</body>

</html>