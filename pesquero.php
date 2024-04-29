<?php

require_once("bancoDePesca");

    Class Pesquero{

       private $velocidadRecoleccion;

       function __construct($velocidadRecoleccion=18){
        $this->velocidadRecoleccion=$velocidadRecoleccion;

        }

        public function Recolectar(bancoDePesca $bancoDePesca){

            $tiempo = ceil($cantidadAlimento/$this->velocidadRecoleccion);

            echo "El pesquero recolecto todos los pescados en ".$tiempo." minutos";

        }
    }





?>