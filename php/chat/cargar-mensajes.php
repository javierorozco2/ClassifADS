<?php
    include('../conexion.php');

    session_start();

    $idDe = $_POST['id'];
    $idmio = $_SESSION['iduser'];
    $query = mysqli_query($conexion,"SELECT * FROM mensajes WHERE (de = ".$idDe." AND para = ".$idmio.") OR ( de = ".$idmio." AND para = ".$idDe.")");

    if(!$query){
        die("Fallo la consulta".mysqli_error($conexion));
    }
    
    function acomodarFecha($fecha){
        return date('g:i a', strtotime($fecha));
    }

    $json = array();

    while($row = mysqli_fetch_array($query)){
        $row['fecha'] = acomodarFecha($row['fecha']);
        $json[] = array(
            'de' => $row['de'],
            'para' => $row['para'],
            'mensaje' => $row['mensaje'],
            'fecha' => $row['fecha'],
            'idmio' => $idmio
        );
    }

    $jsonstring = json_encode($json);
    echo($jsonstring)

?>