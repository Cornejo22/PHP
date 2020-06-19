<?php
session_start();
if (
    isset($_SESSION['n_usuario'])  && $_SESSION['n_usuario'] == 'usuario'
    && isset($_SESSION['password'])  && $_SESSION['password'] == 'usuario'
) {
    echo ("<p><a href='salir.php'>Cerrar Sesión</a></p>
    <h4>Zona Privada</h4>
    <p><a href='download.txt' download>Enlace 1</a></p>
    <p><a href='download.txt' download>Enlace 2</a></p>
    <p><a href='download.txt' download>Enlace 3</a></p>");
} else {
    echo ("<p>Debe registrarse o iniciar sesión para entrar</p>
    <p>Use el siguiente enlace <a href='ejercicio13_46.php'>Iniciar Sesión</a></p>");
}
