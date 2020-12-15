<?php
    include('../conexion.php');

    session_start();



    if(!empty($_POST['texto'])){

        $texto = $_POST['texto'];
        $texto = mysqli_real_escape_string($conexion,$texto);

        $para = $_POST['para'];
        $para = mysqli_real_escape_string($conexion,$para);

        $de = $_SESSION['iduser'];
        $de = mysqli_real_escape_string($conexion,$de);

        $query = mysqli_query($conexion,"INSERT INTO mensajes (de, para, mensaje, leido) VALUES ($de,$para,'$texto',0)");

        if(!$query){
            die("Error al mandar mensaje".mysqli_error($conexion));
        }

        // echo("Se envio el mensaje");

    }else{
        // echo("No se entrego ningun texto");
    }
?>