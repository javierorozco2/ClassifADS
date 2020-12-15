<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Open Sans';
        }

        #footcontainer{
            background: #111;
            display: flex;
            width: 100%;
            min-height: 170px;
            color: white;
            box-sizing: border-box;
        }


        #footcontainer__info{
            /* background:#666; */
            flex: 2;
            margin: 10px 30px;
        }

        #footcontainer__info p{
            margin-top: 10px;
            /* font-size: 14px; */
            text-align: justify;
        }

        #footcontainer__social{
            /* background: #777; */
            flex: 1;
            margin: 10px 30px;
            display: flex;
            flex-direction: column;
        }

        #footcontainer__social a{
            margin: 5px;
            color: rgb(255, 255, 255);
            text-decoration: none;
        }

        #footcontainer__social a:nth-child(2){
            margin-top: 10px;
        }

        #footcontainer__social i{
            font-size: 20px;
            color: rgb(173, 185, 255);
            margin-right: 15px;
        }

        #footcontainer__contacto{
            /* background: #888; */
            flex: 1;
            margin: 10px 30px;
            display: flex;
            flex-direction: column;
        }

        #footcontainer__contacto i{
            font-size: 20px;
            color: rgb(173, 185, 255);
            margin-right: 15px;
        }

        #footcontainer__contacto p:nth-child(2){
            margin-top: 10px;
        }
        #footcontainer__contacto p{
            margin-top: 20px;
        }

        @media (max-width: 800px){
            #footcontainer{
                flex-wrap: wrap;
            }
            #footcontainer__info{
                /* background-color: lawngreen; */
                flex: none;
                width: 100%;
                margin: 10px 0px;
            }
            #footcontainer__info p, #footcontainer__info h3 {
                margin: 0 30px;
                
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="footer.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
    <div id="footcontainer">
        <div id="footcontainer__info">
            <h3>Información de la pagina web</h3>
            <p>En esta página web puedes realizar publicaciones de anuncios clasificados con
                el objetivo de dar a conocer algún producto o servicio.
            </p>
        </div>

        <div id="footcontainer__social">
            <h3>Redes sociales</h3>
            <a href="#" target="_blank"><i class="fab fa-facebook"></i>Facebook</a>
            <a href="#" target="_blank"><i class="fab fa-youtube"></i>Youtube</a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i>Twitter</a>
        </div>

        <div id="footcontainer__contacto">
            <h3>Información de contacto</h3>
            <p><i class="fas fa-globe-americas"></i>Manzanillo, Colima</p>
            <p><i class="fas fa-phone-alt"></i>+523141390033</p>
            <p><i class="fas fa-envelope"></i>contacto@classifads.com</p>
        </div>
    </div>
</body>
</html>