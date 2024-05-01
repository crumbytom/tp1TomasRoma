<?php

$tituloPagina = "Inicio";

require_once("header.php");



?>

<main>
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

    <div class="noticias">
        <h2 class="titulo-noticias">Noticias</h2>
        <h3 class="titulo2">Calculá el nuevo tiempo de Recoleccion del Aldeano Chino</h3>
        <div class="div-aldeano">
            <a href="aldeanoRecoleccion.php" class="boton-aldeano">Calcular tiempo</a>
        </div>
        <div class="aldeano">
            <img src="img/aldeanoChino.png" alt="aldeano">
        </div>
        

    </div>
    
</main>




<?php
    include_once("footer.php"); // solo llamo al footer

?>