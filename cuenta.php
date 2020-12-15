<?php

    include ('php/conexion.php');
    include ('php/validarsesion.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>ClassifADS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Estilos/cuenta.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="sources/icon.png" />
</head>
<body>

     <?php require 'pedazos/headerprueba.php' ?>

     <?php

        $consulta = 'SELECT * FROM gensuario where iduser = '.$_SESSION['iduser'];

        $consulta = mysqli_query($conexion, $consulta);

        $consulta = mysqli_fetch_array($consulta); 

     ?>


    <section id="main">
        <div class="main-div" id="perfil">
            <img id="portada" src="sources/portada.jpg">
            <img id="img-perfil" src="sources/default.jpg">
            <p id="name"><?=($consulta['nombre']);?></p>
            <p><?=($consulta['correo']);?></p>
            <p><?=($consulta['estado']);?></p>
            <p><?=($consulta['telefono']);?></p>
            <div class="head-divboton">
                <span class="head-span1"></span>
                <span class="head-span2"></span>
                <span class="head-span3"></span>
                <span class="head-span4"></span>
                <span class="head-span5"></span>
                <a href="php/cerrarsesion.php">CERRAR SESION</a>
            </div>
        </div>
        <div class="main-div" id="main-div__anuncios">
            <h1>Anuncios</h1>

            <?php

                if (isset($_GET['idborrar'])) {
                    $id = $_GET['idborrar'];
                    $delete = mysqli_query($conexion, 'SELECT idusuario FROM anuncio where id = '.$id);
                    $delete = mysqli_fetch_array($delete);

                    if ($delete['idusuario'] == $_SESSION['iduser']) {

                        $newDelete = mysqli_query($conexion, 'UPDATE anuncio SET validado = 3 where id = '.$id);
                        if ($newDelete) {

                            echo "Se borro el anuncio correctamenta";

                        }else{
                            echo "No se borro el anuncio :(";
                        }
                        
                    }

                }

            ?>

            <?php 

                $anun = mysqli_query($conexion, 'SELECT * FROM anuncio where idusuario = '.$_SESSION['iduser']);

                while ($nueva = mysqli_fetch_array($anun)) {

                    if ($nueva['validado'] == 1) {

                        $img = mysqli_query($conexion, 'SELECT direccion FROM imagen where idpublicacion = '.$nueva['id']);

                        $img = mysqli_fetch_array($img);

            ?>

            <div class="adminsection_valanun-anun">
                <img src="<?=$img[0];?>" alt="imagen">
                <p><?=$nueva['nombre'];?></p>
                <a href="?idborrar=<?php echo($nueva['id']);?>"><button><i class="fas fa-trash"></i></button></a>
                <a href="adsinfo.php?idanuncio=<?php echo($nueva['id']);?>" id="veranun"><button><i class="fas fa-eye"></i></button></a>
            </div>

            <?php

                    }
                }

            ?>

        </div>
        <div class="main-div" id="mensajes">
            <h1 style="text-align: center;">Mensajes</h1>
            <iframe src="mensajes.html" style="border: none; width: 100%; height: 700px;"></iframe>
        </div>
        
    </section>

    <?php require 'pedazos/footer.php'?>

</body>
</html>