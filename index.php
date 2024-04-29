<?php


require_once("arbusto.php");
require_once("aldeano.php");
require_once("bancoDePesca.php");
require_once("pesquero.php");




$arbusto1 =new Arbusto();
$aldeano1 =new Aldeano();
$aldeano1->recolectar($arbusto1);


$pesquero1 =new Pesquero();
$bancodepesca = new bancoDePesca();
$pesquero1->recolectar($bancodepesca);



?>