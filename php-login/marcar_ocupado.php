<?php
include("database.php");

// Lógica para marcar un horario como ocupado en la base de datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idHorario = $_POST['id_horario'];

    // Actualiza la base de datos marcando el horario como ocupado
    $query = "UPDATE horarios SET disponible = 0 WHERE id = $idHorario";
    mysqli_query($conn, $query);

    echo 'Horario marcado como ocupado.';
} else {
    echo 'Acceso no autorizado.';
}
?>
