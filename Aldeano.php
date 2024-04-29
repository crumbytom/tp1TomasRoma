<?php

require_once("arbusto.php");

    Class Aldeano{
        private $velocidadRecoleccion;

        function __construct($velocidadRecoleccion=18){
            $this->velocidadRecoleccion=$velocidadRecoleccion;
         }

        public function recolectar(Arbusto $arbusto){

            $cantidadAlimento = $arbusto ->getAlimento();

            $tiempo = ceil($cantidadAlimento/$this->velocidadRecoleccion);

            echo "El aldeano recolecto todos los arbustos en ".$tiempo." minutos";
         }
    }

?>