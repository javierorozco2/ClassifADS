<?php
    include("conexion.php");

    if(isset($_POST['login'])){
        // session_start();
        $_SESSION['login'] = false;

        $correo = $_POST['correo'];
        $correo  = mysqli_real_escape_string($conexion,$correo);

        $password = $_POST['password'];
        $password = mysqli_real_escape_string($conexion,$password);

        $consulta = "SELECT * FROM gensuario WHERE correo = '$correo'";
        $consulta = mysqli_query($conexion,$consulta);
        $consulta = mysqli_fetch_array($consulta);

        //Verific}ar si la cuenta esta activa
        $verificacion = $consulta['estatus'];
        if($verificacion==0 and isset($consulta)){
            ?>
                <h3 id='reg-noconfirm'>Tu cuenta esta suspendida</h3>
            <?php
        }elseif($verificacion==2 and isset($consulta)){
            ?>
                <h3 id='reg-noconfirm'>Verifica tu correo electronico</h3>
            <?php
        }

        if ($consulta and $verificacion==1) {
            if(password_verify($password,$consulta['contrasena'])){
                $_SESSION['login'] = true;

                $_SESSION['iduser'] = $consulta['iduser'];
                $_SESSION['nombre'] = $consulta['nombre'];
                $_SESSION['correo'] = $consulta['correo'];
                $_SESSION['estado'] = $consulta['estado'];
                $_SESSION['telefono'] = $consulta['telefono'];
                $_SESSION['tipouser'] = $consulta['tipouser'];

                header('Location: index.php');
            }else{
                ?>
                    <h3 id='reg-noconfirm'>Contraseña incorrecta</h3>
                <?php
                session_destroy();
            }
        }else{
            if(empty($consulta)){

                ?>
                    <h3 id='reg-noconfirm'>El correo ingresado no existe</h3>
                <?php
            }
            session_destroy();
        }

        mysqli_close($conexion);
    }
?>