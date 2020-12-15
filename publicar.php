<?php
    include("php/conexion.php");
    include("php/validarsesion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassifADS - Publicar anuncio</title>
    <link rel="stylesheet" href="Estilos/publicar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="sources/icon.png" />
</head>
<body>
    
    <?php require 'pedazos/headerSesion.php'?>

    <section id="pubsec">
        <h1 id="pubsec__titulo">Publicar anuncio</h1>
        <hr id="pubsec__linea">

        
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

            <?php
                include("php/publicaranuncio.php");
            ?>
            
            <div id="pubsec__form-imagenes">
                <label for="foto" id="pubsec__form-masimg"><p>+</p> Ingresa imagenes</label>
                <input type="file" name="foto[]" id="foto" accept="image/*" multiple required>
            </div>

            <div class="pubsec__form-div">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="pubsec__input" placeholder="Ingresa un nombre" required>
            </div>

            <div class="pubsec__form-div">
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="pubsec__input" placeholder="Ingresa el precio" required>
            </div>

            <div class="pubsec__form-div">
                <label for="condicion">Condición</label>
                <select name="condicion" id="condicion" class="pubsec__input-select" required>
                    <option disabled selected hidden>----</option>
                    <option value="Nuevo">Nuevo</option>
                    <option value="Usado">Usado</option>
                    <option value="Servicio">Servicio</option>
                </select>
            </div>
            <div class="pubsec__form-div">
                <label for="clasificacion">Clasificacion</label>
                <select name="clasi" id="clasificacion" class="pubsec__input-select" required>
                    <option disabled selected hidden>----</option>
                    <option value="0">Vehiculos</option>
                    <option value="1">Computacion y electronica</option>
                    <option value="2">Tiempo libre y moda</option>
                    <option value="3">Hogar</option>
                    <option value="4">Servicios</option>
                    <option value="5">Empleo y educacion</option>
                    <option value="6">Otros</option>
                </select>
            </div>

            <div class="pubsec__form-div">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" required class="pubsec__input-select" required>
                    <option disabled selected hidden>----</option>
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

            <div class="pubsec__form-div-carac" id="div-carac">
                <label for="concepto">Características</label>

                <input type="text" name="concepto[]" id="concepto" class="pubsec__input-carac" placeholder="Ingresa una característica" required>
                <input type="text" name="desc[]" id="desc" class="pubsec__input-carac" placeholder="Ingresa una descripción" required>
            </div>

            <span id="mascarac"><i class="fas fa-plus-circle"></i></span>

            <div class="pubsec__form-div">
                <label for="pubsec__form-desc">Descripción</label>
                <textarea name="descripcion" id="pubsec__form-desc" placeholder="Ingresa una descripción" required></textarea>
            </div>

            <input type="submit" name="publicar" value="Publicar" id="pubsec__form-submit">
        </form> 
    </section>

    <?php require 'pedazos/footer.php'?>

</body>
    <!-- Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="script/imagenes.js"></script>
<script src="script/publicar.js"></script>
</html>