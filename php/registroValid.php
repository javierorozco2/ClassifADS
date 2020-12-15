<?php
include("conexion.php");

error_reporting(E_ALL);
ini_set('display_errors', '1');


if(isset($_POST['registrar'])){
    if (strlen($_POST['nombre'])>=1 && strlen($_POST['correo'])>=1 && strlen($_POST['contrasena1'])>=1){ 
        
        $nombre = $_POST['nombre'];
        $nombre = mysqli_real_escape_string($conexion,$nombre);

        $correo = $_POST['correo'];
        $correo = mysqli_real_escape_string($conexion,$correo);

        $contra1 = $_POST['contrasena1'];
        $contra1 = mysqli_real_escape_string($conexion,$contra1);

        $contra2 = $_POST['contrasena2'];
        $contra2 = mysqli_real_escape_string($conexion,$contra2);


        if ($contra1!=$contra2) {
            ?>
                <h3 id='adminsection__reg-noconfirm'>Las contraseñas no son iguales</h3>
            <?php
        }else{
            $contra = $contra1;
            // COMPROBACION DEL CORREO
            $correoConsulta = "SELECT correo FROM gensuario WHERE correo = '$correo'";
            $correoRes = mysqli_query($conexion,$correoConsulta);
            $correoRes = mysqli_fetch_array($correoRes);

            if (!$correoRes) {
                
                $passwordHash = password_hash($contra, PASSWORD_BCRYPT);
                $consulta = "INSERT INTO gensuario VALUES ('validador',null,'$nombre','$correo','$passwordHash',null, null,1,0)";
                $resultado = mysqli_query($conexion,$consulta);

                $consultaid = "SELECT iduser FROM gensuario WHERE correo = '$correo'";
                $consultaid = mysqli_query($conexion,$consultaid);
                $consultaid = mysqli_fetch_array($consultaid);
                $id = strval($consultaid['iduser']);

                mkdir("sources/anuncios/$id");

                ?>
                <h3 id='adminsection__reg-confirm'>Registrado correctamente</h3>
                <?php

            }else{
                ?>
                <h3 id='adminsection__reg-noconfirm'>El correo ingresado ya existe</h3>
                <?php
            }
        }
    }
}

?>