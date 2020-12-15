<?php
    include("php/conexion.php");
    include("php/validarsesionNo.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ClassifADS - Inicio de sesión</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="Estilos\sesion.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="icon" type="image/png" href="sources/icon.png" />
</head>
<body>
    <div class="barra"></div>
    
    <form class="formulario" method="POST">
        <?php
            include("php/iniciarsesion.php")
        ?>
        <h1>Login</h1>
        <div class="contenedor">         
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="email" name="correo" placeholder="Correo Electronico" required pattern="[\w.@-]+">
            </div>
         
        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" name="password" placeholder="Contraseña" required>
        </div>
        <input type="submit" name='login' value="Iniciar sesion" class="button">
        <p>Inicia sesión y disfruta de la gran experiencia que nuestra paginá te ofrece.</p>
        <p>¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
        </div>
    </form>
</body>
<script>
    $(document).ready(function () {
      $('.barra').load('pedazos/headerprueba.php');
    });
</script>
</html>