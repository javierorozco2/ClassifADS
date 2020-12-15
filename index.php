<?php
    include("php/conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassifADS</title>
    <link rel="stylesheet" href="Estilos/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="sources/icon.png" />
</head>
<body>

    <?php require 'pedazos/headerprueba.php'?>

    <?php
        if(isset($_SESSION['tipouser'])){
            if($_SESSION['tipouser']=="admin" or $_SESSION['tipouser']=="validador"){
    ?>
    <!-- Boton de administracion -->
    <a href="administracion.php"  id="section__adminBoton-a">
            <div>
            <p><i class="fas fa-user-cog"></i>Administración</p>
            </div>
    </a>
    <?php
            }
        }
    ?>

    <!-- Banner -->
    <div class="slider">
        <ul>
            <li><img src="sources/main/slider1.png" alt=""></li>
            <li><img src="sources/main/slider2.png" alt=""></li>
        </ul>
    </div>
    
    <section id="indxsec">

        <!-- BARRA DE CATEGORIAS -->
        <div id="section__cat">
            <a href="busqueda.php?seccion=0&preciomin=&preciomax=&estado=&btn="><img src="sources/main/cat1.png">Vehiculos</a>
            <a href="busqueda.php?seccion=1&preciomin=&preciomax=&estado=&btn="><img src="sources/main/cat2.png">Computación y electrónica</a>
            <a href="busqueda.php?seccion=2&preciomin=&preciomax=&estado=&btn="><img src="sources/main/cat3.png">Tiempo libre</a>
            <a href="busqueda.php?seccion=3&preciomin=&preciomax=&estado=&btn="><img src="sources/main/cat4.png">Hogar</a>
            <a href="busqueda.php?seccion=3&preciomin=&preciomax=&estado=&btn="><img src="sources/main/cat5.png">Servicios</a>
            <a href="busqueda.php?seccion=4&preciomin=&preciomax=&estado=&btn="><img src="sources/main/cat6.png">Empleo y educacion</a>
        </div>

        <!-- CONTENIDO DE PRODUCTOS -->
        <p id="section__productos-titulo">Te podría interesar…</p>

        <div id="section__productos"></div>

        <button id="section__vermas"><i class="fas fa-chevron-down"></i></button>

    </section>

    <?php require 'pedazos/footer.php'?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="script/index.js"></script>
</body>
</html>
