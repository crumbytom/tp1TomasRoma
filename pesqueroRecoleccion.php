<?php

$tituloPagina = "Pesquero Recoleccion";

require_once("header.php");
require_once("arbusto.php");
require_once("pesquero.php");

$pesquero1 =new Pesquero();
$bancodepesca = new bancoDePesca();
?>

<main class="main-aldeano">
    <div class="respuesta-php2">
        <?php $pesquero1->recolectar($bancodepesca);?>
    </div>
    
    <div class="pesquero-recolec">
        <img src="img/pesquero.gif" alt="aldeano recolectando">
    </div>

    <a href="index.php" class="boton-volver2">Volver al Inicio</a>
        
</main>



<?php
    include_once("footer.php"); // solo llamo al footer

?>