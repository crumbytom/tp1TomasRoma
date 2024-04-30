<?php

$tituloPagina = "Inicio";

require_once("header.php");
require_once("footer.php");

require_once("arbusto.php");
require_once("bancoDePesca.php");
require_once("pesquero.php");

require_once("aldeanoChino.php");
require_once("aldeanoFranco.php");


?>


<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/age1.jpg" class="d-block w-100" alt="Captura de pantalla Age Of Empires">
    </div>
    <div class="carousel-item">
      <img src="img/age2.jpg" class="d-block w-100" alt="Captura de pantalla Age Of Empires 2">
    </div>
    <div class="carousel-item">
      <img src="img/age3.jpg" class="d-block w-100" alt="Captura de pantalla Age Of Empires 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<?php
$arbusto1 =new Arbusto();

$aldeanoChino =new AldeanoChino();
$aldeanoFranco =new AldeanoFranco();

//$aldeanoChino->recolectar($arbusto1);


$pesquero1 =new Pesquero();
$bancodepesca = new bancoDePesca();
//$pesquero1->recolectar($bancodepesca);

?>