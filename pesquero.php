<?php

require_once("bancoDePesca.php");
require_once("recolector.php");


    Class Pesquero implements Recolector{

       private $velocidadRecoleccion;

       function __construct($velocidadRecoleccion=18){
        $this->velocidadRecoleccion=$velocidadRecoleccion;

        }

        public function Recolectar(Recolectable $recolectable){

            $cantidadAlimento = $recolectable ->getAlimento();

            $tiempo = ceil($cantidadAlimento/$this->velocidadRecoleccion);

            echo "<br>El pesquero recolecto todos los pescados en ".$tiempo." minutos";

        }
    }





?>