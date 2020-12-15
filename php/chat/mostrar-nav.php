<?php
    include('../conexion.php');
    session_start();

    $userid = $_SESSION['iduser'];

    $recibidosQuery = mysqli_query($conexion,"SELECT de FROM mensajes WHERE para= '$userid' ORDER BY fecha DESC");

    $json = array();

    while($row = mysqli_fetch_array($recibidosQuery)){
        $nombre = mysqli_query($conexion, "SELECT * FROM gensuario WHERE iduser = ".$row['de']);
        $nombre = mysqli_fetch_array($nombre);

        $json[] = array(
            'nombre' => $nombre['nombre'],
            'id' => $nombre['iduser'],
            'correo' => $nombre['correo']
        );
    }

    $jsonstring = json_encode($json);
    echo($jsonstring);

    
?>