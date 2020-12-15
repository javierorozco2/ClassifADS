<?php
    include("php/conexion.php");
    include("php/validarsesionNo.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ClassifADS - Registrate ahora</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Estilos\sesion.css">
    <link rel="icon" type="image/png" href="sources/icon.png" />
</head>  
<body>
    <?php require 'pedazos/headerprueba.php'?>
    
    <form class="formulario" method="post">
        <?php
            include("php/registro.php");
        ?>
        <h1>Registrarse</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre Completo" name="nombre" required pattern="[a-zA-Z\s]+">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="email" placeholder="Correo Electronico" name="correo" required pattern="[\w.@-]+">
            </div>
            <div class="input-contenedor">
                <i class="fas fa-passport icon"></i>
                <select name="estado" required>
                    <option disabled selected hidden><p id="a1">Estado</p></option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="Chihuahua">Ciudad de México</option>
                    <option value="Coahuila">Coahuila</option>
                    <option value="Colima">Colima</option>
                    <option value="Durango">Durango</option>
                    <option value="Estado de México">Estado de México</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="Michoacán">Michoacán</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz">Veracruz</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>
                </select>
            </div>
            <div class="input-contenedor">
                <i class="fas fa-phone icon"></i>
                <input type="tel" placeholder="Numero Telefonico" name="telefono" required>
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="contrasena" required>
            </div>
            <input type="submit" name='registrar' value="Registrate" class="button">

            <p>¿Qué esperas?, registrate ya y disfruta de una gran experiencia.</p>
            <p>¿Ya tienes una cuenta?<a class="link" href="login.php"> Iniciar Sesion</a></p>
        </div>
    </form>


</body>
</html>