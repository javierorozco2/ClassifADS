<?php
include ("php/conexion.php");
$busqueda = $_GET["buscar"];

if (isset($_GET["btn"])){
    $seccion  = $_GET["seccion"];
    $condicion = $_GET["condicion"];
    $preciomax = $_GET["preciomax"];
    $preciomin = $_GET["preciomin"];
    $estado = $_GET["estado"];
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassifADS</title>
    <link rel="stylesheet" href="../Estilos/busqueda.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="sources/icon.png" />
</head>
<body>
    <?php require 'pedazos/headerprueba.php'?>

    <div id="resul">
        <div>
            <p>Resultado de la busqueda: </p>
            <p> <?=$busqueda ?></p>
        </div>
    </div>

    
    <section id="busection">
        <div id="busection__div-cont" class="busection__div">
        <div id="section__productos">

        <?php 

            $busqueda = mysqli_real_escape_string($conexion, $busqueda);
            $bus = mysqli_query($conexion,"SELECT * FROM anuncio WHERE nombre LIKE '%$busqueda%'");

            if(isset($seccion)){
                $bus = mysqli_query($conexion,"SELECT * FROM anuncio WHERE clasificacion =".$seccion);
            }
            
            if(isset($condicion)){
                $bus = mysqli_query($conexion,"SELECT * FROM anuncio WHERE condicion =".$condicion);
            }

            if(isset($preciomax)){
                $bus = mysqli_query($conexion,"SELECT * FROM anuncio WHERE precio <=".$preciomax);
            }

            if(isset($preciomin)){
                $bus = mysqli_query($conexion,"SELECT * FROM anuncio WHERE precio >=".$preciomin);
            }

            if(isset($estado)){
                $bus = mysqli_query($conexion,"SELECT * FROM anuncio WHERE estado =".$estado);
            }

            if(isset($seccion,$condicion,$preciomin,$preciomax,$estado)){
                $bus = mysqli_query($conexion,"SELECT * FROM anuncio WHERE estado ='.$estado' AND precio >='.$preciomin' AND precio <='.$preciomax' AND condicion ='.$condicion' AND clasificacion ='.$seccion'");
            }

            do {
                if ($MOSTRAR["validado"] == 1){
                    $IMAGEN = "SELECT direccion FROM imagen WHERE idpublicacion =" .$MOSTRAR['id'];
                    $IMAGEN = mysqli_query($conexion,$IMAGEN);
                    $IMAGEN = mysqli_fetch_array($IMAGEN);
                
        ?>
                <a href='adsinfo.php?idanuncio=<?=$MOSTRAR['id'];?>' class="section__productos-cuadro">
                    <img src="<?= $IMAGEN[0] ?>" alt="IMAGEN" width="300px" height="250px">
                    <p><?=($MOSTRAR['nombre']);?></p>
                    <p><?=($MOSTRAR['condicion']);?></p>
                    <p>$ <?=($MOSTRAR['precio']);?></p>
                </a>
        <?php 
                }
            }while($MOSTRAR = mysqli_fetch_array($bus));
            
        ?>

            </div>
        </div>

        <?php



        ?>

        <div id="busection__div-aside" class="busection__div">
            <div>
                <h4>FILTROS DE BUSQUEDA</h4>
                <form action="busqueda.php" method="$_GET">
                    <p class="busection__div-p">Categoria</p>
                    <select name="seccion" id= busection__div-select>
                        <option value="">Culquiera</option>
                        <option value="0">Vehiculos</option>
                        <option value="1">Computacion y Electronica</option>
                        <option value="2">Tiempo Libre y Moda</option>
                        <option value="3">Hogar</option>
                        <option value="4">Servicios</option>
                        <option value="5">Empleo y Educacion</option>
                    </select>
                    <p class="busection__div-p">Condición</p>
                    <input type="radio" name="condicion" value="nuevo" class="busection__div-radi">
                    <label for="nuevo" >Nuevo</label><br>
                    <input type="radio" name="condicion" value="usado" class="busection__div-radi">
                    <label for="usado">Usado</label><br>
                    <input type="radio" name="condicion" value="servicio" class="busection__div-radi">
                    <label for="usado">Servicio</label><br>
                    <p  class="busection__div-p" >Precio</p>
                    <input type="number" placeholder="MINIMO" class="busection__div-num" name="preciomin" >
                    <input type="number" placeholder="MAXIMO" class="busection__div-num" name="preciomax" >
                    <p  class="busection__div-p">Estado</p>
                    <select name="estado" id= busection__div-select>
                        <option value="">Culquiera</option>
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
                    <button type="submit" id="busection__div-but" name="btn">Filtrar</button>
                </form>
            </div>
        </div>
    </section>
    
    <?php require 'pedazos/footer.php'?>
</body>
</html>