<?php
    session_start();
?>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        font-family: 'Open Sans';
        box-sizing: border-box;
    }

    #head{
        position: sticky;
        top: 0;
        left: 0;
        z-index: 100;
        background-color: #fff;
        border-bottom: 1px solid rgb(230, 230, 230);
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        height: 80px;
    }

    #head img{
        width: 200px;
        object-fit: contain;
    }

    #head input[type='search']{
        width: 50vw;
        border: 0;
        border-radius: 5px;
        height: 35px;
        box-shadow: 0px 0px 1px 1px rgb(182, 182, 182);
        padding: 0 1vw;
    }

    #head input[type='search']::placeholder{
        padding-left: 10px;
        color: rgb(230, 230, 230);
        font-size: 14px;
    }

    #head-botones{
        display: flex;
        flex-direction: row;
    }

    .head-divboton{
        position: relative;
        justify-content: center;
        align-items: center;
        width: 150px;
        height: 50px;
        display: flex;
        overflow: hidden;
        margin-right: 20px;
        transition: 0.5s;
        box-shadow: 0px 0px 0px 0px black;
        /* transition-delay: 0.2s; */
    }

    #usericon{
        font-size: 20px;
        margin-right: 5px;
    }

    .head-divboton:hover{
        border-radius: 4px;
        position: relative;
        justify-content: center;
        align-items: center;
        width: 150px;
        height: 50px;
        display: flex;
        overflow: hidden;
        box-shadow: 1px 1px 5px -1px black;
    }

    .head-divboton a{
        font-size: 16px;
        text-transform: uppercase;
        color: black;
        font-weight: bold;
    }

    /* LINEA ABAJO */
    .head-divboton .head-span1{
        background: linear-gradient(90deg, rgba(106,98,255,1) 0%, rgba(0,136,163,1) 100%);
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
    }
    /* LINEA IZQ */
    .head-divboton .head-span2{
        position: absolute;
        height: 100%;
        width: 3px;
        background: linear-gradient(90deg, rgba(106,98,255,1) 0%, rgba(0,136,163,1) 100%);
        top: 100%;
        left: 0%;
        transition: 0.2s;
    }

    .head-divboton:hover .head-span2{
        position: absolute;
        height: 100%;
        width: 3px;
        background: linear-gradient(90deg, rgba(106,98,255,1) 0%, rgba(0,136,163,1) 100%);
        top: 0%;
        left: 0%;
    }
    /* LINEA DERECHA */
    .head-divboton .head-span3{
        position: absolute;
        height: 100%;
        width: 3px;
        background: linear-gradient(90deg, rgba(106,98,255,1) 0%, rgba(0,136,163,1) 100%);
        top: 100%;
        right: 0%;
        transition: 0.2s;
    }
    .head-divboton:hover .head-span3{
        position: absolute;
        height: 100%;
        width: 3px;
        background: linear-gradient(90deg, rgba(106,98,255,1) 0%, rgba(0,136,163,1) 100%);
        top: 0;
        right: 0%;
    }

    /* ARRIBA DOS LINEAS */
    /* IZQ */

    .head-divboton .head-span4{
        background: linear-gradient(90deg, rgba(106,98,255,1) 0%, rgba(0,136,163,1) 100%);
        position: absolute;
        width: 100%;
        height: 3px;
        top: 0;
        left: -100%;
        transition: 0.2s;
        /* transition-delay: 0.2s; */
    }
    .head-divboton:hover .head-span4{
        background: linear-gradient(90deg, rgba(106,98,255,1) 0%, rgba(0,136,163,1) 100%);
        position: absolute;
        width: 100%;
        height: 3px;
        top: 0;
        left: 0%;
    }
    /* DERECHA */
    .head-divboton .head-span5{
        background: linear-gradient(90deg, rgba(106,98,255,1) 0%, rgba(0,136,163,1) 100%);
        position: absolute;
        width: 100%;
        height: 3px;
        top: 0;
        left: 100%;
        transition: 0.2s;
        /* transition-delay: 0.2s; */
    }

    .head-divboton:hover .head-span5{
        background: linear-gradient(90deg, rgba(106,98,255,1) 0%, rgba(0,136,163,1) 100%);
        position: absolute;
        width: 100%;
        height: 3px;
        top: 0;
        left: 0%;
    }

    /* BOTON MAS INFO */

    #head-check{
        display: none;
    }

    #head-check-label{
        display: flex;
        justify-content: center;
        width: 45px;
    }

    #head-check-img{
        display: none;
        width: 45px;
        height: 45px;
        object-fit: cover;
        cursor: pointer;
    }

    @media (max-width: 800px){
        #head-check-img{
            display: flex;
        }

        #head-botones{
            position: absolute;
            flex-direction: column;
            align-items: center;
            background-color: rgb(0, 75, 94);
            z-index: -100;
            width: 100%;
            top: 80px;
            left: -100%;
            transition: left 0.5s ease;
        }

        .head-divboton a{
            color: white;
        }
        .head-divboton span{
            display: none;
        }
        .head-divboton{
            box-shadow: 0 0 0 0 black;
            width: 80%;
        }

        .head-divboton:hover{
            box-shadow: 0 0 0 0 black;
        }

        #head-check:checked ~ #head-botones{
            left: 0;
        }
    }
</style>
<link rel="icon" type="image/png" href="sources/icon.png" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

<header id='head'>
    <a href="index.php"><img src="sources/logo2.png" alt="logo"></a>
    <form action="busqueda.php" method="GET">
    <input type="search" name="buscar" id="search" placeholder="Ingresa tu busqueda">
    </form>



    <input type="checkbox" name="check" id="head-check">
    <label for="head-check" id="head-check-label"><img src="sources/list.png" id="head-check-img"></label>
    <!-- BOTONES -->
    <div id='head-botones'>

        <?php
             if (isset($_SESSION['login'])) {
        ?>
        <div class="head-divboton">
            <span class="head-span1"></span>
            <span class="head-span2"></span>
            <span class="head-span3"></span>
            <span class="head-span4"></span>
            <span class="head-span5"></span>
            <a href="cuenta.php"><i class="fas fa-user-circle" id="usericon"></i><?=strtok($_SESSION['nombre']," ")?></a>
        </div>
        <div class="head-divboton">
            <span class="head-span1"></span>
            <span class="head-span2"></span>
            <span class="head-span3"></span>
            <span class="head-span4"></span>
            <span class="head-span5"></span>
            <a href="publicar.php">¡Anunciate YA!</a>
        </div>

        <?php
             }else{
        ?>
        <div class="head-divboton">
            <span class="head-span1"></span>
            <span class="head-span2"></span>
            <span class="head-span3"></span>
            <span class="head-span4"></span>
            <span class="head-span5"></span>
            <a href="registro.php">Registrate</a>
        </div>
        <div class="head-divboton">
            <span class="head-span1"></span>
            <span class="head-span2"></span>
            <span class="head-span3"></span>
            <span class="head-span4"></span>
            <span class="head-span5"></span>
            <a href="login.php">¡Anunciate YA!</a>
        </div>
        <?php
             }
        ?>
    </div>
</header>