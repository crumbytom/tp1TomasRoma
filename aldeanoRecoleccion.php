<?php

$tituloPagina = "Aldeano Recoleccion";

require_once("header.php");
require_once("arbusto.php");
require_once("aldeanoChino.php");

$arbusto1 =new Arbusto();
$aldeanoChino =new AldeanoChino();
//$aldeanoFranco =new AldeanoFranco();

?>

<main class="main-aldeano">

    <div class="respuesta-php">
        <?php $aldeanoChino->recolectar($arbusto1);?>
    </div>
    
    <div class="aldeano-recolec">
        <img src="img/arbusto.gif" alt="aldeano recolectando">
    </div>


    <a href="index.php" class="boton-volver">Volver al Inicio</a>
        

</main>






<?php
    include_once("footer.php"); // solo llamo al footer

?>