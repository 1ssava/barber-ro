<?php include("includes/header.php")?>
<?php include("database.php")?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">  
    <title>Bienvenido a tu Barbería</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            font-size: 40px;
            position: relative;
        }

        h1 img {
            position: absolute;
            height: 20px;
        }

        h1 img.left {
            width: 20px;
            height: inherit;
            margin-top: -12px;
            left: 100px;
        }

        h1 img.right {
            width: 20px;
            height: inherit;
            margin-top: -12px;
            right: 100;
        }

        #imagen-container {
            text-align: center;
            margin-top: 20px;
        }

        #imagen-container img {
            max-width: 75%;
            height: auto;
            border-radius: 7px;
        }
        #imagen-container2 {
            text-align: center;
            padding-top: 0px;
        }

        #imagen-container2 img {
            max-width: 60%;
            height: auto;
            border-radius: 7px;
        }

        #imagen-container3 {
            text-align: center;
            margin-top: 20px;
        }

        #imagen-container3 img {
            max-width: 40%;
            height: auto;
            border-radius: 7px;
        }
        
        #wsp {
            text-align: center;
            margin-top: 20px;
        }

        #wsp img {
            max-width: 25%;
            height: auto;
            border-radius: 7px;
        }
        

        .textoInicio {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }

        .boton {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #1E609A;
            border-radius: 5px;
        }
        .verestilo {
            text-align: center;
            font-size: 19px;
            margin-top: 20px;
        }
        .ubicacion{
            padding-right: 125px;
            font-size: 28px;
            font-weight: bold;
        }
        .ubitext {
            text-align: left; /* Alinea el texto a la izquierda */
            font-size: 10px; /* Ajusta el tamaño de la fuente según sea necesario */
            font-weight: bold;
            padding-top: 10px; /* Añade un espacio superior al texto */
        }


        @media screen and (max-width: 768px) {
            h1 {
                font-size: 39px;
                font-weight: bold;
            }
            h2 {
                text-align: center;
                margin-left: 20px;
                font-size: 25px;
                font-weight: bold;
            }

            .textoInicio {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <h1>
        <img src="img/barberpole.png" alt="Barberpole" class="left">
        Barber-RO
        <img src="img/barberpole.png" alt="Barberpole" class="right">
    </h1>

    <div id="imagen-container">
        <img src="img/fachada.jpeg" alt="Foto de referencia">
    </div>

    <div class="textoInicio">
        <a href="login.php" class="boton">Iniciar Sesión</a>
        <a href="signup.php" class="boton">Registrarse</a>
    </div>

    <div class="verestilo">
        <a href="estilos.php" class="boton">Ver Estilos</a>
    </div>
       
    <div id="imagen-container2">
        <img src="img/tipoestilo.png" alt="Foto de referencia">
    </div>

    <div class="ubicacion">
        <a href="https://www.google.com/maps/place/Maip%C3%BA+208,+2170022+San+Felipe,+Valpara%C3%ADso/@-32.7490613,-70.7296155,19z/data=!4m16!1m9!3m8!1s0x968816c60f1357b7:0x32b1749801a1226d!2sMaip%C3%BA+208,+2170022+San+Felipe,+Valpara%C3%ADso!3b1!8m2!3d-32.7491645!4d-70.7295573!10e5!16s%2Fg%2F11hczf9s2v!3m5!1s0x968816c60f1357b7:0x32b1749801a1226d!8m2!3d-32.7491645!4d-70.7295573!16s%2Fg%2F11hczf9s2v?hl=es&entry=ttu">Ubicación</a>
    </div>

    <div class="ubitext">
        <h2>🗺️📌 Maipú 208, 2170022 San Felipe, Valparaíso</h2>
    </div>
    
    <div id="imagen-container3">
        <img src="img/ubicacion.jpg" alt="Foto de referencia">
    </div>

    <div id="wsp">
        <a href="wsp.php">
        <img src="img/wsp.png" alt="Foto de referencia">
        </a>

    </div>

</body>
</html>

<?php include("includes/footer.php")?>
