<?php include("includes/header.php")?>
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
    .contenedor_leyenda {
        text-align: center;
        margin-top: 45px;
       /* margin: 90px auto;  Ajusta el margen superior e inferior del contenedor */
        background-color: skyblue; /* Color de fondo */
        padding: 20px; /* Espaciado interno del contenedor */
        border-radius: 40px; /* Bordes redondeados */
    }

    .contenedor_leyenda p {
        font-size: 18px;
        font-weight: bold; /* Texto en negrita */
        font-family: 'Arial'; /* Fuente Comic Neue */
        margin: 0; /* Elimina el margen predeterminado */
    }

    .img_pago {
        text-align: center;
        margin-top: 30px;
       /* margin: 20px auto;  Centra la imagen y agrega un margen superior e inferior */
    }

    .img_pago img {
        max-width: 100%; /* Hace que la imagen sea responsive y ocupe el 100% del contenedor */
        height: auto; /* Mantiene la proporción de la imagen */
        margin-top: 0px; /* Agrega un espacio en la parte superior de la imagen */
    }

    .back-container {
        text-align: center;
        margin-top: 30px; /* Ajusta el margen superior del contenedor */
        margin-right: 0px;
        margin-left: 113px;
        border-radius: 30px; /* Bordes redondeados */
        overflow: hidden; /* Evita que el border-radius se extienda a través de la pantalla */
        display: inline-block; /* Hace que el contenedor se ajuste al ancho del contenido */
    }

    .back {
        display: block;
        padding: 10px 20px;
        background-color: greenyellow;/*#C1FF8E*/
        text-decoration: none; /* Elimina el subrayado del enlace #C1FF8E*/
        color: #333; /* Color del texto del enlace */
        font-size: 20px; /* Tamaño del texto del enlace */
        font-weight: bold;
    }
    .pagoon{
        text-align: left;
        margin-left: 20px;
        margin-top: 10px;
        font-size: 20px;
    }
    .text{
        text-align: justify;
        font-size: 20px;
    }
    
    @media screen and (max-width: 768px) {
            h1 {
                font-size: 32px;
                font-weight: bold;
            }
    }
</style>
    <h1>
        <img src="img/barberpole.png" alt="Barberpole" class="left">
        Barber-RO
        <img src="img/barberpole.png" alt="Barberpole" class="right">
    </h1>

    <h1 class="text">
        El siguiente link te llevará a realizar tu pago: 
        <a href="https://www.flow.cl/uri/f561YYaTz" class="pagoon">↱ Realiza tu pago en línea!💲↰</a>
    </h1>
    
    <div class="contenedor_leyenda">
        <p>
            Este QR te llevará a realizar el pago
        </p>
    </div>

    <div class="img_pago">
        <img src="img/qrpago.png" alt="Imagen referencia de pago">
    </div>

    <div class="back-container">
        <a href="inicio_exitocl.php" class="back">Volver al inicio</a>
    </div>