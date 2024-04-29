<?php

require_once("bancoDePesca.php");

    Class Pesquero{

       private $velocidadRecoleccion;

       function __construct($velocidadRecoleccion=18){
        $this->velocidadRecoleccion=$velocidadRecoleccion;

        }

        public function Recolectar(bancoDePesca $bancoDePesca){

            $cantidadAlimento = $bancoDePesca ->getAlimento();

            $tiempo = ceil($cantidadAlimento/$this->velocidadRecoleccion);

            echo "<br>El pesquero recolecto todos los pescados en ".$tiempo." minutos";

        }
    }





?>