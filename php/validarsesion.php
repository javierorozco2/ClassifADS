<?php

    session_start();
    $login = $_SESSION['login'];

    if (!$login) {
        header('Location: ../registro.php');
    }else{
        $correo = $_SESSION['correo'];
    }
?>