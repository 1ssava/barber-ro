<?php
include("database.php");
include("includes/header.php");

// Verificar si se ha enviado un formulario para editar el artículo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí debes incluir la lógica para procesar la edición del artículo
    // Obtener los datos del formulario
    $id_articulo_editar = $_POST["id_articulo_editar"];
    $descripcion_editar = $_POST["descripcion_editar"];
    $cantidad_editar = $_POST["cantidad_editar"];

    // Actualizar el artículo en la base de datos (debes implementar esta lógica)
    // Ejemplo:
    $query_update = "UPDATE articulos SET descripcion = '$descripcion_editar', cantidad = $cantidad_editar WHERE id_articulo = $id_articulo_editar";
    mysqli_query($conn, $query_update);
    // Puedes añadir más verificaciones y manejo de errores aquí

    // Redirigir a la página de visualización de artículos después de editar
    header("Location: ver_articulos.php");
    exit();
}

// Si no se ha enviado un formulario para editar, muestra el formulario de edición
$id_articulo = $_GET["id_articulo"] ?? null;

// Obtener los datos actuales del artículo para mostrarlos en el formulario
$query_select = "SELECT descripcion, cantidad FROM articulos WHERE id_articulo = $id_articulo";
$result = mysqli_query($conn, $query_select);
$row = mysqli_fetch_assoc($result);

// Verificar si se encontró el artículo
if (!$row) {
    // Manejar el caso en que el artículo no exista
    echo "Artículo no encontrado.";
    exit();
}


// Mostrar el formulario de edición
?>
    <style>
        .desc{
            text-align: left;
            font-size: 24px;
        }
        .cant{
            margin-left: 28px;
            font-size: 24px;
        }    

    </style>
<div class="h-100 mt-5 bg-white text-center">
    <h1 style="font-size: 40px; color: blue; font-weight:bold;">Editar Artículo</h1>

    <form action="edit_articulos.php" method="post">
        <input type="hidden" name="id_articulo_editar" value="<?php echo $id_articulo; ?>">
        
        <label for="descripcion_editar" class= "desc">Descripción:</label>
        <input type="text" name="descripcion_editar" value="<?php echo $row['descripcion']; ?>" required>
        
        <label for="cantidad_editar" class="cant">Cantidad:</label>
        <input type="number" name="cantidad_editar" value="<?php echo $row['cantidad']; ?>" required>

        <button type="submit" class="btn btn-success">
            <i class="fa-solid fa-file-pen"></i> Guardar Cambios
        </button>
    </form>
</div>



<?php include("includes/footer.php"); ?>
