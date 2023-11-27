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
            h3{
                text-align: center;
                font-size: 25px;
            }
        }
    </style>

    <h1>
        <img src="img/barberpole.png" alt="Barberpole" class="left">
        <a href="index.php">Barber-RO</a>
        <img src="img/barberpole.png" alt="Barberpole" class="right">
    </h1>

    <h2>¿Olvidaste tu contraseña🤔?</h2>

    <h3>
        Contáctate con los administradores, puedes acudir a ellos mediante esta dirección de correo: 
    </h3>
    <h2>➡️sergiovargas354@gmail.com</h2>

</head>
</html>

<?php include("includes/footer.php")?>
