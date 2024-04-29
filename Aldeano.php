<?php

require_once("arbusto.php");

sdsdkjsdk
    Class Aldeano{
        private $velocidadRecoleccion;

         function __construct(){
            $this->velocidadRecoleccion = 18;
         }

         public function recolectar(Arbusto $arbusto){

            $cantidadAlimento = $arbusto ->getAlimento();

            $tiempo = ceil($cantidadAlimento/this->$velocidadRecoleccion);

            echo "El aldeano recolecto todos los arbustos en ".$tiempo." minutos";
         }
    }





?>