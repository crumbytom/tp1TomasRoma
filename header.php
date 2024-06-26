<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title><?php echo $tituloPagina?></title>
</head>
<body>
    
    <header class="d-flex flex-column align-items-center">
        <a href="index.php" class="logo">
            <img src="img/logo.png" alt="Logo Age Of Empires">
        </a>
        
        <nav class="mt-3">
        <?php    
            $secciones = array();

            $secciones ['Inicio'] = 'index.php';
            $secciones ['Civilizaciones'] = 'civilizaciones.php';
            foreach($secciones as $nombre => $link){ //aca recorremos el array y asociamos el nombre con los links
                echo "<a href= $link> $nombre</a>";
                }
            ?>
        </nav>


    </header>
