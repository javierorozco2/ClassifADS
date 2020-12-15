<?php
    include('../conexion.php');

    $listado = $_POST['listado'];

    $anuncios = mysqli_query($conexion, 'SELECT * FROM anuncio WHERE validado = 1 ORDER BY id DESC LIMIT '.$listado.',8');

    if(!$anuncios){
        die('Error al cargar anuncios'.mysqli_error($conexion));
    }

    $json = array();

    while($row = mysqli_fetch_array($anuncios)){
        $IMAGEN = "SELECT direccion FROM imagen WHERE idpublicacion =" .$row['id'];
        $IMAGEN = mysqli_query($conexion,$IMAGEN);
        $IMAGEN = mysqli_fetch_array($IMAGEN);

        $json[] = array(
            'direccion' => $IMAGEN['direccion'],
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'condicion' => $row['condicion'],
            'precio' => $row['precio']
        );
    }

    $jsonstring = json_encode($json);

    echo($jsonstring);
?>