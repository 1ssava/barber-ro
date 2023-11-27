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

        .clientes{
            margin-right: 190px;
            margin-top: 80px;
        }

        .ver_articulos{
            margin-right: 90px;
            margin-top: -10px;
            font-size: 25px;
            text-align: center;
            font-weight: bold;
        }
        .ver_eventos{
            margin-right: 170px;
            margin-top: -10px;
            font-size: 25px;
            text-align: center;
            font-weight: bold;
        }
        .tabla{
            margin-top: -10px;
            margin-bottom: 10px;
            max-width: 60%;
        }
        .tabla2{
            color: black;
            margin-top: 8px;
            margin-right: 100px;
            max-width: 45%;
        }
        .tabla3{
            color: black;
            margin-top: -10px;
            margin-right: 140px;
            max-width: 35%;
        }
        .cerrar_sesion {
        position: absolute;
        top: 97px;
        bottom: 0px;
        left: 85.4%;
        transform: translateX(-50%);
        margin-bottom: 10px;
        }

        @media screen and (max-width: 768px) {
            h1 {
                font-size: 32px;
                font-weight: bold;
            }
            h2 {
                color: black;
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

        <div class="cerrar_sesion">
        <a href="logout.php" class="btn btn-primary">Cerrar Sesión</a>
        </div>

    <h2 class="clientes">
         <a href="editaru.php">Ver clientes<img src="img/tabladatos.png" alt="Foto referencial" class="tabla"/a>
    </h2>

    <h2 class="ver_articulos">
         <a href="ver_articulos.php">Ver lista de artículos<img src="img/tabladatosar.png" alt="Foto referencial" class="tabla2"/a>
    </h2>
    
    <h2 class="ver_eventos">
         <a href="ver_eventos.php">Ver eventos
            <br>

    </h2>
    <img src="img/tabladatoseve.png" alt="Foto referencial" class="tabla3"/a>
</body>
</html>

<?php include("includes/footer.php")?>