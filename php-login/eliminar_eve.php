<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Eliminar evento de la base de datos
    $query = "DELETE FROM eventos WHERE id = $id";
    mysqli_query($conn, $query);

    // Redireccionar a la página de eventos
    header("Location: ver_eventos.php");
    exit();
} else {
    // Redireccionar si no se proporciona un id
    header("Location: ver_eventos.php");
    exit();
}
?>
