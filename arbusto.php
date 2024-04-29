<?php

require_once("aldeano.php");

    Class Arbusto{
        private $cantidadAlimento;

        function __construct($cantidadAlimento=125){
            $this->cantidadAlimento=$cantidadAlimento;
        }

        public function getAlimento(){

            return $this->cantidadAlimento;
        }

    }




?>