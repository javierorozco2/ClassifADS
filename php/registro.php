<?php
include("conexion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

#error_reporting(E_ALL);
#ini_set('display_errors', '1');


if(isset($_POST['registrar'])){
    if (strlen($_POST['nombre'])>=1 && strlen($_POST['correo'])>=1 && strlen($_POST['contrasena'])>=1){ 
        
        $nombre = $_POST['nombre'];
        $nombre = mysqli_real_escape_string($conexion,$nombre);

        $correo = $_POST['correo'];
        $correo = mysqli_real_escape_string($conexion,$correo);

        $contra = $_POST['contrasena'];
        $contra = mysqli_real_escape_string($conexion,$contra);

        $estado = $_POST['estado'];
        $estado = mysqli_real_escape_string($conexion,$estado);

        $telefono = $_POST['telefono'];
        $telefono = mysqli_real_escape_string($conexion,$telefono);

        // COMPROBACION DEL CORREO
        $correoConsulta = "SELECT correo FROM gensuario WHERE correo = '$correo'";
        $correoRes = mysqli_query($conexion,$correoConsulta);
        $correoRes = mysqli_fetch_array($correoRes);

        if (!$correoRes) {
            // Diccionario de validaciones: [0] Inhabilitado, [1] Activo, [2] en espera de validacion
            $passwordHash = password_hash($contra, PASSWORD_BCRYPT);
            $hash = md5(rand(0,1000));
            $consulta = "INSERT INTO gensuario VALUES ('normal',null,'$nombre','$correo','$passwordHash','$estado', '$telefono',2,'$hash')";
            $resultado = mysqli_query($conexion,$consulta);

            $consultaid = "SELECT iduser FROM gensuario WHERE correo = '$correo'";
            $consultaid = mysqli_query($conexion,$consultaid);
            $consultaid = mysqli_fetch_array($consultaid);
            $id = strval($consultaid['iduser']);

            mkdir("sources/anuncios/$id");


            // ----------SE ENVIAR EL CORREO---------
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'classifads00@gmail.com';                     // SMTP username
                $mail->Password   = 'classifads255';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom('classifads0@gmail.com', 'ClassifADS');
                $mail->addAddress($correo);     // Add a recipient

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Activa tu cuenta';
                $mail->Body    = '
                <table style="max-width: 700px; padding: 10px; margin: 0 auto; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #ecf0f1; text-align: left; padding: 0;">
                        <img src="https://i.postimg.cc/CKXLJdQC/logo2.png" width="50%" style="display: block; margin: 50px auto;">
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #ecf0f1; font-family: sans-serif;">
                        <div style="display: block; font-family: sans-serif; color: rgb(65, 65, 65); font-size: 22px; text-align: center;">
                            <p>Hola '.$nombre.', ¡Gracias por unirte a nosotros!</p>
                        </div>
        
                        <div style="color: #34495e; display: block; font-family: sans-serif; text-align: justify; padding: 0 10%; font-size: 18px;">
                            <p>
                                Antes que nada, estamos contentos de que hayas preferido 
                                unirte a nuestra página web donde podrá realizar anuncios 
                                clasificados. Te queremos informar que tus datos han sido 
                                registrados correctamente, pero antes de proceder a realizar 
                                anuncios, te pedimos que des click en el siguiente botón para 
                                verificar tu cuenta.
                            </p>
                        </div>

                        <div style="color: #34495e; display: block; font-family: sans-serif; text-align: justify; padding: 0 10%; font-size: 18px;">

                            <div style="display: block; background-color: rgb(0, 117, 121); width: 60%; max-width: 200px; height: 45px; margin: 50px auto; text-align: center; padding-top: 10px; box-sizing: border-box;">
                                <a href="http://sellbuydjj.eshost.com.ar/php/activarcuenta.php?iduser='.$consultaid['iduser'].'&hash='.$hash.'" style="text-decoration: none; color: white; font-weight: bolder; font-size: 20px; ">Activar cuenta</a>
                            </div>
                        </div>

                        <div style="color: #34495e; display: block; font-family: sans-serif; text-align: justify; padding: 0 10%; font-size: 18px;">

                            <p style="text-align: center;">O Tambien puedes dar click al siguiente enlace:</p>
        
                        </div>

                        <div style="color: #34495e; display: block; font-family: sans-serif; text-align: justify; padding: 0 10%; font-size: 18px;">
        
                            <a style="text-align: center; text-decoration: none; display: inline-block; width: 100%;" href="http://sellbuydjj.eshost.com.ar/php/activarcuenta.php?iduser='.$consultaid['iduser'].'&hash='.$hash.'">http://sellbuydjj.eshost.com.ar/php/activarcuenta.php?iduser='.$consultaid['iduser'].'&hash='.$hash.'</a>

                            <p style="text-align: center; padding: 30px 0; font-weight: bolder;">¡Nos vemos en ClassifADS!</p>
                        </div>
                    </td>
                </tr>
            </table>';

                $mail->send();
                // echo 'El correo se envio correctamente';
            } catch (Exception $e) {
                echo "Error al enviar el correo: {$mail->ErrorInfo}";
            }
            ?>
                <p id='reg-confirm' style="font-weight: bolder; height: 70px;">Registrado correctamente, te mandamos un email con indicaciones para activar tu cuenta</p>
            <?php

        }else{
            ?>
            <h3 id='reg-noconfirm'>El correo ingresado ya existe</h3>
            <?php
        }
    }
}

?>