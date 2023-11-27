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
        .qrnum{
            max-width: 60%;
        }
        .dm{
            font-size: 30px;
            font-weight: bold;
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
    
    <h2>Contáctanos!</h2>
    <h3>+56 989359623✅</h3>
    <a href="https://w.app/H7gVwy" class="dm">↱Mensaje directo!↰</a>
    <img src="img/NmeroBarberRO.png" alt="Foto referencial"class="qrnum">
        
</body>
</html>

<?php include("includes/footer.php")?>
