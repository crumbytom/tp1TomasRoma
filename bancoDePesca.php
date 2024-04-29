<?php

require_once("pesquero.php");


    Class bancoDePesca implements Recolectable{

        private $cantidadAlimento;

        function __construct($cantidadAlimento=225){
            $this->cantidadAlimento=$cantidadAlimento;
        }

        public function getAlimento(){

            return $this->cantidadAlimento;
        }
    }


?>