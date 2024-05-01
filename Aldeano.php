<?php

require_once("arbusto.php");
require_once("recolector.php");

    abstract Class Aldeano implements Recolector{
        private $velocidadRecoleccion;
        private $bonus;

        function __construct($velocidadRecoleccion=18, $bonus=null){
            $this->velocidadRecoleccion=$velocidadRecoleccion;
            $this->bonus = $bonus;
         }

        public function recolectar(Recolectable $recolectable){

            $cantidadAlimento = $recolectable ->getAlimento();

            $tiempo = ceil($cantidadAlimento/$this->velocidadRecoleccion);

            echo "El aldeano recolectó todos los arbustos en ".$tiempo." minutos";
         }

         public function getBonus(){
            return $this->bonus;
         }
    }

?>