<?php
include("database.php");

// Verifica si se están enviando datos por GET
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['fechaReserva']) && isset($_GET['horaInicio']) && isset($_GET['horaFin'])) {
    // Obtener la fecha, hora de inicio y hora de fin de los parámetros de la URL
    $fecha = $_GET['fechaReserva'];
    $horaInicio = $_GET['horaInicio'];
    $horaFin = $_GET['horaFin'];

    // Realizar la inserción en la base de datos
    $query = "INSERT INTO eventos (fecha, hora_inicio, hora_fin) VALUES ('$fecha', '$horaInicio', '$horaFin')";
    $result = mysqli_query($conn, $query);

    // Verificar el resultado de la consulta
    if ($result) {
        echo 'Evento guardado con éxito';
    } else {
        echo 'Error al guardar el evento';
    }
} else {
    echo 'Método no permitido o faltan parámetros';
}
?>
