<?php  
    session_start();
    include('php/conexion.php');
    if(isset($_SESSION['tipouser'])){
        if($_SESSION['tipouser']=="normal"){
            header('Location: index.php');
            exit();
        }
    }else{
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassifADS - Administración</title>
    <link rel="stylesheet" href="Estilos/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="sources/icon.png" />
</head>
<body>

    <?php require 'pedazos/headerSesion.php'?>
    
    <section id="adminsection">

        <!-- --------PHP VALIDACION DE ANUNCIOS -->
        <?php
            if(!empty($_REQUEST['idvalidanun'])){
                $idvalidanun = $_REQUEST['idvalidanun'];
                $validConsulta = mysqli_query($conexion,"UPDATE anuncio SET validado=1 WHERE id=".$idvalidanun);
                if($validConsulta){
                    ?>
                        <h3 id='adminsection__reg-confirm'>Anuncio validado correctamente</h3>
                    <?php
                }else{
                    ?>
                        <h3 id='adminsection__reg-noconfirm'>Error al validar el anuncio</h3>
                    <?php
                }
            }
        ?>
        <!-- ----------------------- -->

        <!-- --------PHP BORRADO DE ANUNCIOS -->
        <?php
            if(!empty($_REQUEST['idborrar'])){
                $idborranun = $_REQUEST['idborrar'];
                $borrConsulta = mysqli_query($conexion,"UPDATE anuncio SET validado=3 WHERE id=".$idborranun);
                if($borrConsulta){
                    ?>
                        <h3 id='adminsection__reg-confirm'>Anuncio borrado correctamente</h3>
                    <?php
                }else{
                    ?>
                        <h3 id='adminsection__reg-noconfirm'>Error al borrar el anuncio</h3>
                    <?php
                }
            }
        ?>
        <!-- ----------------------- -->
        
        <!-- PHP BORRAR USUARIO -->
        <?php
            if(!empty($_REQUEST['userborrar'])){
                $iduserborrar = $_REQUEST['userborrar'];
                $borrUser = mysqli_query($conexion,"UPDATE gensuario SET estatus=0 WHERE iduser=".$iduserborrar);
                if($borrUser){
                    ?>
                        <h3 id='adminsection__reg-confirm'>Usuario borrado correctamente</h3>
                    <?php
                }else{
                    ?>
                        <h3 id='adminsection__reg-noconfirm'>Error al borrar el usuario</h3>
                    <?php
                }
            }
        ?>
        <!-- ---------- -->
        <!-- VALIDACION DE ANUNCIOS -->

        <div class="adminsection__div" id="adminsection__valanun">
            <h2>Validacion de anuncios</h2>
            <!-- ESTO ES EDITABLE EN PHP -->
            <?php
                // enumeracion de la paginacion
                $totalanun = mysqli_query($conexion,"SELECT COUNT(*) as totalanuncios FROM anuncio WHERE validado = 0");
                $totalanun = mysqli_fetch_array($totalanun);
                $totalanun = $totalanun['totalanuncios'];

                $porPagina = 5;

                if(empty($_GET['paganun'])){
                    $paginaAnuncios = 1;
                }else{
                    $paginaAnuncios = $_GET['paganun'];
                }
                
                $anundesde = ($paginaAnuncios-1)*$porPagina;
                $anuntotalpagina = ceil($totalanun/$porPagina);
                $consulta = mysqli_query($conexion,"SELECT * FROM anuncio WHERE validado=0 ORDER BY id ASC LIMIT $anundesde,$porPagina");

                while($lista = mysqli_fetch_array($consulta)){
                    $imgCons = "SELECT direccion FROM imagen WHERE idpublicacion=".$lista['id'];
                    $imgCons = mysqli_query($conexion,$imgCons);
                    $imgCons = mysqli_fetch_array($imgCons);
            ?>
                <div class="adminsection_valanun-anun">
                    <img src="<?=$imgCons[0];?>" alt="imagen">
                    <p><?=$lista['nombre'];?></p>
                    <a href="?idvalidanun=<?php echo($lista['id']);?>"><button><i class="fas fa-check"></i></button></a>
                    <a href="?idborrar=<?php echo($lista['id']);?>"><button><i class="fas fa-trash"></i></button></a>
                    <a href="adsinfo.php?idanuncio=<?php echo($lista['id']);?>" id="veranun"><button><i class="fas fa-eye"></i></button></a>
                </div>
            <?php
                }
            ?>

            <!-- Paginacion -->
            <ul id="adminsection__paginacion">

            <?php 
                if ($paginaAnuncios!=1) {
            ?>
                <li><a href="?paganun=<?php echo(1);?>"><<</a></li>
                <li><a href="?paganun=<?php echo($paginaAnuncios-1);?>"><</a></li>
            <?php
                }
                for ($i=1; $i <= $anuntotalpagina; $i++) { 
                    if ($i == $paginaAnuncios) {
                        echo("<li id='paginacion__seleccionada'>".$i."</li>");
                    }else{
                        echo("<li><a href='?paganun=".$i."'>".$i."</a></li>");
                    }
                }
            ?>

            <?php
                if ($paginaAnuncios<$anuntotalpagina) {
            ?>
                <li><a href="?paganun=<?php echo($paginaAnuncios+1);?>">></a></li>
                <li><a href="?paganun=<?php echo($anuntotalpagina);?>">>></a></li>
            <?php
                }
            ?>
            </ul>
        </div>

        <!-- ----------------ADMIN USUARIOS---------------- -->
        <?php
            if($_SESSION['tipouser']=="admin"){
        ?>
        <div class="adminsection__div" id="adminsection__adminuser">
            <h2>Administrar usuarios</h2>

            <?php
                // enumeracion de la paginacion
                $totaluser = mysqli_query($conexion,"SELECT COUNT(*) as totaluser FROM gensuario WHERE estatus = 1");
                $totaluser = mysqli_fetch_array($totaluser);
                $totaluser = $totaluser['totaluser'];

                // $porPagina = 5;

                if(empty($_GET['paguser'])){
                    $paginaUser = 1;
                }else{
                    $paginaUser = $_GET['paguser'];
                }
                
                $userdesde = ($paginaUser-1)*$porPagina;
                $usertotalpagina = ceil($totaluser/$porPagina);

                $usercon = mysqli_query($conexion,"SELECT * FROM gensuario WHERE estatus=1 ORDER BY iduser ASC LIMIT $userdesde,$porPagina");
                while($datauser = mysqli_fetch_array($usercon)){
            ?>
                <div class="adminsection_adminuser-user">
                    <p><?=$datauser['iduser'];?></p>
                    <p><i class="fas fa-user-circle" id="usericon"></i><?=$datauser['nombre'];?></p>
                    <p><?=$datauser['tipouser'];?></p>

                    <button><i class="fas fa-comment-alt"></i></button>
                    <a href="?userborrar=<?php echo($datauser['iduser']);?>"><button><i class="fas fa-trash"></i></button></a>
                </div>
            <?php
                }
            ?>

            <!-- Paginacion -->
            <ul id="adminsection__paginacion">

            <?php 
                if ($paginaUser!=1) {
            ?>
                <li><a href="?paguser=<?php echo(1);?>"><<</a></li>
                <li><a href="?paguser=<?php echo($paginaUser-1);?>"><</a></li>
            <?php
                }
                for ($i=1; $i <= $usertotalpagina; $i++) { 
                    if ($i == $paginaUser) {
                        echo("<li id='paginacion__seleccionada'>".$i."</li>");
                    }else{
                        echo("<li><a href='?paguser=".$i."'>".$i."</a></li>");
                    }
                }
            ?>

            <?php
                if ($paginaUser<$usertotalpagina) {
            ?>
                <li><a href="?paguser=<?php echo($paginaUser+1);?>">></a></li>
                <li><a href="?paguser=<?php echo($usertotalpagina);?>">>></a></li>
            <?php
                }
            ?>
            </ul>
        </div>
        <?php
            }
        ?>
        <!-- ----------------AGREGAR VALIDADOR-------------- -->
        <?php
            if($_SESSION['tipouser']=="admin"){
        ?>
        <div class="adminsection__div" id="adminsection__validador">
            <h2>Agregar validador</h2>

            <form method="POST">
                <?php
                    include("php/registroValid.php");
                ?>

                <div>
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="Nombre Completo" name="nombre" required pattern="[a-zA-Z\s]+">
                </div>
                <div>
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" placeholder="Correo Electronico" name="correo" required>
                </div>
                <div>
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="contrasena1" required>
                </div>
                <div>
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Repetir contraseña" name="contrasena2" required>
                </div>

                <input type="submit" name="registrar" value="Registrar">
            </form>
        </div>
        <?php
            }
        ?>
    </section>

    <?php require 'pedazos/footer.php'?>

    <script src="script/administracion.js"></script>
</body>
</html>