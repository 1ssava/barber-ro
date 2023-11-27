<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id_articulo"])) {
    $id_articulo = $_GET["id_articulo"];

    // Eliminar artículo de la base de datos
    $query = "DELETE FROM articulos WHERE id_articulo = $id_articulo";
    mysqli_query($conn, $query);

    // Redireccionar a la página de artículos
    header("Location: ver_articulos.php");
    exit();
} else {
    // Redireccionar si no se proporciona un id_articulo
    header("Location: ver_articulos.php");
    exit();
}
?>
