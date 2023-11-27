<?php include("includes/header.php")?>
<style>
    .contenedor {
        margin: auto;
        text-align: center;
        padding: 10px;
        border-radius: 10px;
        position: relative;
    } 

    .titulo {
        font-size: 40px;
        color: black;
        font-weight: bold;
    }

    .cerrar_sesion {
        position: absolute;
        top: 97px;
        bottom: 0px;
        left: 85.4%;
        transform: translateX(-50%);
        margin-bottom: 10px;
    }

    .imagen_calendario,
    .imagen_pago {
        position: relative;
        text-align: center;
        margin: 20px auto;
    }

    .imagen_calendario img,
    .imagen_pago img {
        max-width: 70%;
        height: auto;
    }

    .agenda_cita,
    .realizar_pago {
        font-size: 24px;
        margin-top: 0px;
    }

    @media (min-width: 768px) {
        .titulo {
            font-size: 60px;
        }

        .agenda_cita,
        .realizar_pago {
            font-size: 32px;
        }
    }

    @media (min-width: 992px) {
        .contenedor {
            width: 70%;
        }
    }

    @media (min-width: 1200px) {
        .contenedor {
            width: 50%;
        }
    }
</style>

<div class="contenedor" style="background-color: skyblue;">
    <p class="titulo">Barber-RO</p>
    <div class="cerrar_sesion">
        <a href="logout.php" class="btn btn-primary">Cerrar Sesión</a>
    </div>
</div>

<div class="imagen_calendario">
    <a href="calendar.php">
        <img src="img/calendario.png" alt="Foto de referencia">
    </a>
    <div class="agenda_cita">Agenda tu cita 😊</div>
</div>

<div class="imagen_pago">
    <a href="pagar.php">
        <img src="img/pago.png" alt="Foto de referencia">
    </a>
    <div class="realizar_pago">Realiza tu pago!</div>
</div>

<?php include("includes/footer.php")?>
