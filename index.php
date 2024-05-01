<?php

$tituloPagina = "Inicio";

require_once("header.php");

require_once("arbusto.php");
require_once("bancoDePesca.php");
require_once("pesquero.php");

require_once("aldeanoChino.php");
require_once("aldeanoFranco.php");


?>


<main class>
    <div class="main-inicio">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <a href="https://www.ageofempires.com/games/aoeiiide/"><img src="img/age3.jpg" class="d-block w-100" alt="Captura de pantalla Age Of Empires"></a>
                </div>
                <div class="carousel-item">
                <a href="https://www.ageofempires.com/games/aoeiiide/"><img src="img/age2.jpg" class="d-block w-100" alt="Captura de pantalla Age Of Empires 2"></a>
                </div>
                <div class="carousel-item">
                    <a href="https://www.ageofempires.com/games/aoeiiide/"><img src="img/age1.jpg" class="d-block w-100" alt="Captura de pantalla Age Of Empires 3"></a>
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
    </div>

    <div>

    </div>
    
</main>



<?php
$arbusto1 =new Arbusto();

$aldeanoChino =new AldeanoChino();
$aldeanoFranco =new AldeanoFranco();

//$aldeanoChino->recolectar($arbusto1);


$pesquero1 =new Pesquero();
$bancodepesca = new bancoDePesca();
//$pesquero1->recolectar($bancodepesca);


?>

<?php
    include_once("footer.php"); // solo llamo al footer

?>