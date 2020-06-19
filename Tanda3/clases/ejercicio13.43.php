/*Hacer una pagina PHP que sea un caso completo de la clase Caja, donde se cree un objeto de la 
clase Caja, se le introducen elementos y se muestren por pantalla dichos elementos.*/

<?php

require_once './caja.php';

$caja = new Caja();
$caja->introduce_completa(55,25,22,"balones","azul");
$caja->muestra();