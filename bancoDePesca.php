<?php

require_once("pesquero");


    Class bancoDePesca{

        private $cantidadAlimento;

        function __construct($cantidadAlimento=225){
            $this->cantidadAlimento=$cantidadAlimento;
        }

        public function getAlimento(){

            return $this->cantidadAlimento;
        }
    }


?>