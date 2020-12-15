<?php

    include('../conexion.php');

    session_start();

    $idanuncio = $_POST['idanuncio'];
    $mensaje = $_POST['mensaje'];

    $idanuncio = mysqli_real_escape_string($conexion, $idanuncio);

    $para = 'SELECT idusuario FROM anuncio WHERE id = '.$idanuncio;
    $para = mysqli_query($conexion,$para);


    if(!$para){
        die('Error al mandar mensaje'.mysqli_error($conexion));
    }

    $para = mysqli_fetch_array($para);

    $de = $_SESSION['iduser'];
    $para = $para['idusuario'];
    $mensaje = mysqli_real_escape_string($conexion, $mensaje);

    $mensaje = mysqli_query($conexion, 'INSERT INTO mensajes (de, para, mensaje) VALUES ( '.$de.', '.$para.', "'.$mensaje.'" )');

    if(!$mensaje){
        die('<p style="text-align: center; font-weight: bolder; color: white; background: rgb(255, 70, 70); border-radius: 5px; padding: 10px;">Error al enviar el mensaje<p>');
    }

    echo('<p style="text-align: center; font-weight: bolder; color: white; background: rgb(70, 255, 70); border-radius: 5px; padding: 10px;">El mensaje se envió correctamente<p>');
?>