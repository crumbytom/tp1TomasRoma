<?php

$tituloPagina = "Inicio";

require_once("header.php");
require_once("footer.php");

require_once("arbusto.php");
require_once("bancoDePesca.php");
require_once("pesquero.php");

require_once("aldeanoChino.php");
require_once("aldeanoFranco.php");





$arbusto1 =new Arbusto();

$aldeanoChino =new AldeanoChino();
$aldeanoFranco =new AldeanoFranco();

$aldeanoChino->recolectar($arbusto1);


$pesquero1 =new Pesquero();
$bancodepesca = new bancoDePesca();
$pesquero1->recolectar($bancodepesca);



?>