<?php
session_start();
include("database.php");

// Verifica que se haya enviado una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos de la reserva desde la solicitud POST
    $fechaReserva = $_POST['fecha'];
    $horaReserva = $_POST['hora'];

    // Puedes agregar validaciones y procesamiento adicional aquí

    // Inserta la reserva en la base de datos
    $query = "INSERT INTO reservas (id_usuario, fecha, hora) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    // Sustituye '1' con la variable real que contiene el ID del usuario
    $idUsuario = 1;

    mysqli_stmt_bind_param($stmt, "iss", $idUsuario, $fechaReserva, $horaReserva);
    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
        echo 'Reserva exitosa.';
    } else {
        echo 'Error al procesar la reserva. Inténtalo de nuevo.';
    }

    // Cierra la declaración preparada
    mysqli_stmt_close($stmt);
} else {
    // Si la solicitud no es POST, redirige o maneja según tus necesidades
    echo 'Acceso no autorizado.';
}
?>