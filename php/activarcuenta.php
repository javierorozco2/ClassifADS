<?php
    include('conexion.php');

    if(empty($_GET)){
        header("Location: ../index.php");
    }

    $iduser = $_GET['iduser'];
    $hash = $_GET['hash'];

    $query = mysqli_query($conexion, "SELECT * FROM gensuario WHERE iduser=".$iduser);
    $query = mysqli_fetch_array($query);

    if($hash==$query['hash']){
        $update = mysqli_query($conexion,"UPDATE gensuario SET estatus = 1 WHERE iduser=".$iduser);
        if($update){
            echo "<script>
                alert('Cuenta verificada, presiona acepta para redireccionar');
                window.location= '../index.php'
                </script>";
        }
    }else{
        echo "<script>
                alert('>:(');
                window.location= '../index.php'
                </script>";
    }

?>