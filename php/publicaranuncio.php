<?php
include("conexion.php");

if(isset($_POST['publicar'])){

    $nombre = $_POST['nombre'];
    $nombre = mysqli_real_escape_string($conexion,$nombre);

    $precio = $_POST['precio'];
    $precio = mysqli_real_escape_string($conexion,$precio);

    $condicion = $_POST['condicion'];
    $condicion = mysqli_real_escape_string($conexion,$condicion);

    $clasificacion = $_POST['clasi'];
    $clasificacion = mysqli_real_escape_string($conexion,$clasificacion);

    $estado = $_POST['estado'];
    $estado = mysqli_real_escape_string($conexion,$estado);

    $descripcion = $_POST['descripcion'];
    $descripcion = nl2br($descripcion);
    $descripcion = mysqli_real_escape_string($conexion,$descripcion);

    $idusuario = $_SESSION['iduser'];
    $idusuario = mysqli_real_escape_string($conexion,$idusuario);
    

    // REGISTRO DE publicacion
    $compImg = true;
    $consulta = "INSERT INTO anuncio (nombre, precio, condicion, estado, descripcion, idusuario, clasificacion) VALUES 
    ('$nombre',$precio,'$condicion','$estado','$descripcion',$idusuario, $clasificacion)";

    if ($compImg) {
        $resultado = mysqli_query($conexion,$consulta);
        
        if ($resultado) {
            ?>
                <h3 id='reg-confirm'>Tu anuncio fue enviado a revisión, en un lapso máximo de 24 horas obtendrás respuesta.</h3>
            <?php
        }else{
            ?>
                <h3 id='reg-noconfirm'>Fallo la publicacion del anuncio</h3>
            <?php
        }
    }

    // CONSULTA PARA OBTENER ULTIMA INSERCION
    $ultimoid = "SELECT LAST_INSERT_ID();";
    $ultimores = mysqli_query($conexion,$ultimoid);
    $ultimores = mysqli_fetch_array($ultimores);

    //IMAGENES
    $numImg = count($_FILES['foto']['name']);
    for ($i=0; $i < $numImg ; $i++) { 
        if (!empty($_FILES['foto']['name'][$i])) {
            $ubicacion = "sources/anuncios/".$_SESSION['iduser']."/".$ultimores[0].$_FILES['foto']['name'][$i];
        }

        if (file_exists($ubicacion)) {
            ?>
                <h3 id='reg-noconfirm'>La imagen <?=$_FILES['foto']['name'][$i] ?> ya existe</h3>
            <?php
            $compImg = false;
        }else{
            $compImg = true;

            // INGRESAR A LA BD LAS IMAGENES
            $imgConsulta = "INSERT INTO imagen (idpublicacion, direccion) VALUES ($ultimores[0],'$ubicacion')";
            $imgquery = mysqli_query($conexion,$imgConsulta);

            $ubicaciontemp = $_FILES['foto']['tmp_name'][$i];
            move_uploaded_file($ubicaciontemp,$ubicacion); 
        }
    }

    // INSERCION DE CARACTERISTICAS
    $caracConcepto = $_POST['concepto'];
    $caracDesc = $_POST['desc'];
    $idpublicacion = $ultimores[0];

    $tam = count($caracConcepto);
    $tam2 = count($caracDesc);

    if($tam!=$tam2){
        die("ERROR AL AGREGAR CARACTERISTICAS");
    }

    for ($i=0; $i < $tam; $i++) { 
        $newConcepto = mysqli_real_escape_string($conexion,$caracConcepto[$i]);
        $newDesc = mysqli_real_escape_string($conexion,$caracDesc[$i]);

        $caracQuery = mysqli_query($conexion,"INSERT INTO caracteristica (idpublicacion, concepto, descripcion) VALUES ( $idpublicacion, '$newConcepto', '$newDesc')");

        if(!$caracQuery){
            die("ERROR AL AGREGAR CARACTERISTICA EN BASE DE DATOS: ".mysqli_error($conexion));
        }
    }

}



?>