<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $descripcion = $_POST["descripcion"];
    $cantidad = $_POST["cantidad"];

    // Insertar en la base de datos
    $query = "INSERT INTO articulos (descripcion, cantidad) VALUES ('$descripcion', $cantidad)";
    mysqli_query($conn, $query);

    // Redireccionar a la página de artículos
    header("Location: ver_articulos.php");
    exit();
}
?>
