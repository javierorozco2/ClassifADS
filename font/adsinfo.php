<?php
session_start();
include('php/conexion.php');
$idanun = $_GET['idanuncio'];
$comprobacion = mysqli_query($conexion, "SELECT validado FROM anuncio WHERE id=" . $idanun);
$comprobacion = mysqli_fetch_array($comprobacion);

$estaAdmin = false;

if (isset($_SESSION['tipouser'])) {
    if ($_SESSION['tipouser'] == "admin" or $_SESSION['tipouser'] == "validador") {
        $estaAdmin = true;
    }
}

if ($comprobacion['validado'] == 0 and $estaAdmin == false) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassifADS - ANUNCIO</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="Estilos/adsinfo.css">
    <link rel="icon" type="image/png" href="sources/icon.png" />
</head>

<body>

    <?php require 'pedazos/headerSesion.php' ?>

    <?php
    $consulta = "select * from anuncio where id = " . $idanun;
    $consulta = mysqli_query($conexion, $consulta);
    $consulta = mysqli_fetch_array($consulta);

    $usuario = "select * from gensuario where iduser = " . $consulta['idusuario'];
    $usuario = mysqli_query($conexion, $usuario);
    $usuario = mysqli_fetch_array($usuario);

    ?>

    <!-------------------------- Boton de borrar y agregar ------------------------>
    <?php

    if (!empty($_REQUEST['anunborrar'])) {
        $idborrar = $_REQUEST['anunborrar'];
        $borrarQuery = mysqli_query($conexion, "UPDATE anuncio SET validado=0 WHERE id=" . $idborrar);
        if ($borrarQuery) {
    ?>
            <p id="alert-sitrash">El anuncio se deshabilito correctamente</p>
        <?php
        } else {
        ?>
            <p id="alert-notrash">Fallo al deshabilitar el anuncio</p>
        <?php
        }
    }

    if (!empty($_REQUEST['anunagregar'])) {
        $idagregar = $_REQUEST['anunagregar'];
        $agregarQuery = mysqli_query($conexion, "UPDATE anuncio SET validado=1 WHERE id=" . $idagregar);
        if ($agregarQuery) {
        ?>
            <p id="alert-sitrash">El anuncio se habilito correctamente</p>
        <?php
        } else {
        ?>
            <p id="alert-notrash">Fallo al habilitar el anuncio</p>
        <?php
        }
    }
    if ($estaAdmin) {
        if ($consulta['validado'] == 1) {
        ?>
            <a href="?anunborrar=<?php echo ($idanun); ?>&idanuncio=<?php echo ($idanun); ?>" id="section__adminBoton-a">
                <div>
                    <p><i class="fas fa-eye-slash"></i>DESHABILITAR</p>
                </div>
            </a>
        <?php
        } elseif ($consulta['validado'] == 0) {
        ?>
            <a href="?anunagregar=<?php echo ($idanun); ?>&idanuncio=<?php echo ($idanun); ?>" id="section__adminBoton-a">
                <div>
                    <p><i class="fas fa-eye"></i>HABILITAR</p>
                </div>
            </a>
    <?php
        }
    }
    ?>


    <div id="container">
        <!------------- Swiper------------ -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                    $imgCons = "SELECT * FROM imagen WHERE idpublicacion=".$idanun;
                    $imgprue = mysqli_query($conexion,$imgCons);
                    while($res = mysqli_fetch_array($imgprue)){

                ?>
                        <div class="swiper-slide" style="background-image:url(<?=$res['direccion']; ?>)"></div>
                        <?php
                        }
                ?>
            </div>
            <!-- Lista de paginacion -->
            <div class="swiper-pagination"></div>
        </div>

        <div id="container__primeraInfo">
            <div class="container_primeraInf-aside">
                <div id="titulo"><?=($consulta['nombre']);?></div>
                <div id="precio">$<?=($consulta['precio']);?></div>
                <div class="condicio-estado"><i class="fas fa-map-marked-alt"></i><?=($usuario['estado']);?></div>
                <dv class="condicio-estado"><?=($consulta['condicion']);?></dv>
            </div>
        </div>
    </div>


    <!-- DESCRIPCION, CARACTERISTICAS, INFO VENDEDOR -->
    <div id="container2">
        <div id="aside1">

            <div id="descripcion">
                <h2>Descripción</h2>
                <p><?=($consulta['descripcion']);?></p>
            </div>

            <div id="caracteristicas">
                <h2>Características</h2>
                <table id="tablacarac">
                    <tr>
                        <td>KILOMETRAJE</td>
                        <td>10KM</td>
                    </tr>
                    <tr>
                        <td>COMBUSTIBLE</td>
                        <td>GASOLINA</td>
                    </tr>
                    <tr>
                        <td>TRANSMISION</td>
                        <td>AUTOMATICA</td>
                    </tr>
                    <tr>
                        <td>COLOR</td>
                        <td>AZUL</td>
                    </tr>
                </table>
            </div>

        </div>

        <div id="aside2">
            <div id="infovendedor">
                <h2>Información de contacto</h2>

                <div id="aside2-container">
                    <img src="sources/adsinfo/Imagen2.png">
                    <div id="aside2-container2">
                        <p id="nombre"><?=($usuario['nombre']);?></p>
                        <p id="correo"><?=($usuario['correo']);?></p>
                    </div>
                </div>

            </div>

            <div id="contactar">
                <h2>Contactar al vendedor</h2>
                <form id="form">

                </form>
                <textarea id="mensaje" name="contactar" form="form"></textarea>
                <button type="submit" name="mensaje" form="form">ENVIAR</button>
                <div id="success"></div>
            </div>

        </div>


    </div>


    <div class="footer"></div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="script/adsinfo.js"></script>
    <!-- JS de swiper-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
</body>
<script>
    $(document).ready(function() {
        $('.barra').load('pedazos/headerprueba.php');
        $('.footer').load('pedazos/footer.php');
    });
</script>

</html>