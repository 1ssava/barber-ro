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
        .clasico{
            max-width: 50%;
            border-radius: 100px;
        }
        .cesar{
            max-width: 50%;
            border-radius: 100px;
        }
        .comb-over{
            max-width: 50%;
            border-radius: 100px;
        }
        .undercut{
            max-width: 50%;
            border-radius: 100px;
        }
        .degradado{
            max-width: 50%;
            border-radius: 100px;
        }
        .fade{
            max-width: 50%;
            border-radius: 100px;
        }
        .flequillo{
            max-width: 50%;
            border-radius: 100px;
        }
        .hongo{
            max-width: 50%;
            border-radius: 100px;
        }
        .largo{
            max-width: 50%;
            border-radius: 100px;
        }
        .mohicano{
            max-width: 50%;
            border-radius: 100px;
        }
        .pompadour{
            max-width: 50%;
            border-radius: 100px;
        }
        .rapado{
            max-width: 50%;
            border-radius: 100px;
        }
        .rayas{
            max-width: 50%;
            border-radius: 100px;
        }
        .spiky{
            max-width: 50%;
            border-radius: 100px;
        }
        .taper{
            max-width: 50%;
            border-radius: 100px;
        }


        @media screen and (max-width: 768px) {
            h1 {
                font-size: 39px;
                font-weight: bold;
            }
            h2{
                font-size: 30px;
            }
            h3{
                font-size: 30px;
                font-weight: bold;
            }

        }
    </style>
</head>
<body>
    <h1>
        <img src="img/barberpole.png" alt="Barberpole" class="left">
        <a href="index.php">Barber-RO</a>
        <img src="img/barberpole.png" alt="Barberpole" class="right">
    </h1>
    
    <h2> Visualiza distintos tipos de estilos!😎</h3>
    <h2>
        Clásico
        <img src="img/estilos/clasico.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    
    <h3>
        Cesar
        <img src="img/estilos/Cesar.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Comb-Over
        <img src="img/estilos/Comb-over.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Undercut
        <img src="img/estilos/CortUndercut.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Degradado
        <img src="img/estilos/degradado.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Fade
        <img src="img/estilos/fade.png" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Flequillo
        <img src="img/estilos/flequillo.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Seta o Hongo
        <img src="img/estilos/hongo.png" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Largo
        <img src="img/estilos/largo.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Mohicano
        <img src="img/estilos/Mohicano.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Pompadour
        <img src="img/estilos/Pompadour.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Rapado
        <img src="img/estilos/rapado.png" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Rayas-Líneas
        <img src="img/estilos/rayas.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Spiky
        <img src="img/estilos/spiky.jpg" alt="Imagen referecial" class="clasico">
    </h3>
    <h3>
        Taper
        <img src="img/estilos/taper.jpg" alt="Imagen referecial" class="clasico">
    </h3>

</body>
</html>

<?php include("includes/footer.php")?>
