/*13.41 Complete la clase Caja con la funcion introduce_completa, donde no solo se introduce el contenido,
sino que tambien se introduce el alto, ancho, largo y color.*/

/*13.42 Complete la clase Caja con la funcion muestra, donde se muestra todos los elementos de la clase,
es decir, el alto, ancho, largo contenido y color*/

<?php

class Caja{
    private $alto;
    private $ancho;
    private $largo;
    private $contenido;
    private $color;

    public function introduce($contenido){
        $this->contenido = $contenido;
    }

    /**Ejercicio 13.41 */
    public function introduce_completa($alto,$ancho,$largo,$contenido,$color){
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->largo = $largo;
        $this->contenido = $contenido;
        $this->color = $color;
    }

    public function muestra_contenido(){
        echo $this->contenido;
    }

    /**Ejercicio 13.42 */
    public function muestra(){
        echo("El alto de la caja es : " . $this->alto . " px<br>");
        echo("El ancho de la caja es : " . $this->ancho . " px<br>");
        echo("El largo de la caja es : " . $this->largo . " px<br>");
        echo("El contenido de la caja es : " . $this->contenido . "<br>");
        echo("El color de la caja es : " . $this->color);
    }
}