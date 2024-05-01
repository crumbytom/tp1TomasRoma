<?php

$tituloPagina = "Aldeano Recoleccion";

require_once("header.php");



require_once("arbusto.php");
require_once("bancoDePesca.php");
require_once("pesquero.php");

require_once("aldeanoChino.php");
require_once("aldeanoFranco.php");


$arbusto1 =new Arbusto();
$aldeanoChino =new AldeanoChino();
$aldeanoFranco =new AldeanoFranco();




$pesquero1 =new Pesquero();
$bancodepesca = new bancoDePesca();
//$pesquero1->recolectar($bancodepesca);

?>



<main>

<?php $aldeanoChino->recolectar($arbusto1);
?>

<a href="index.php" class="boton-volver">Volver al Inicio</a>

</main>






<?php
    include_once("footer.php"); // solo llamo al footer

?>