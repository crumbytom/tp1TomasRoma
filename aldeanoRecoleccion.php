<?php

$tituloPagina = "Aldeano Recoleccion";

require_once("header.php");
require_once("arbusto.php");
require_once("aldeanoChino.php");

$arbusto1 =new Arbusto();
$aldeanoChino =new AldeanoChino();
//$aldeanoFranco =new AldeanoFranco();
$aldeanoChino->recolectar($arbusto1);

?>

<main>
    <div class="boton-volver">
        <a href="index.php" class="boton">Volver al Inicio</a>

    </div>

</main>






<?php
    include_once("footer.php"); // solo llamo al footer

?>