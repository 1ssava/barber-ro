<?php
include("database.php");
include("includes/header.php");

// Verificar si se ha enviado un formulario para editar el evento
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí debes incluir la lógica para procesar la edición del evento
    // Obtener los datos del formulario
    $id_editar = $_POST["id_editar"];
    $fecha_editar = $_POST["fecha_editar"];
    $hora_inicio_editar = $_POST["hora_inicio_editar"];
    $hora_fin_editar = $_POST["hora_fin_editar"];

    // Actualizar el evento en la base de datos (debes implementar esta lógica)
    // Ejemplo:
    $query_update = "UPDATE eventos SET fecha = '$fecha_editar', hora_inicio = '$hora_inicio_editar', hora_fin = '$hora_fin_editar' WHERE id = $id_editar";
    mysqli_query($conn, $query_update);
    // Puedes añadir más verificaciones y manejo de errores aquí

    // Redirigir a la página de visualización de eventos después de editar
    header("Location: ver_eventos.php");
    exit();
}

// Si no se ha enviado un formulario para editar, muestra el formulario de edición
$id = $_GET["id"] ?? null;

// Obtener los datos actuales del evento para mostrarlos en el formulario
$query_select = "SELECT fecha, hora_inicio, hora_fin FROM eventos WHERE id = $id";
$result = mysqli_query($conn, $query_select);
$row = mysqli_fetch_assoc($result);

// Verificar si se encontró el evento
if (!$row) {
    // Manejar el caso en que el evento no exista
    echo "Evento no encontrado.";
    exit();
}

// Mostrar el formulario de edición
?>
<style>
        .fecha{
            text-align: left;
            margin-left: -79px;
            font-size: 24px;
        }
        .horai{
            margin-left: -58px;
            font-size: 24px;
        }
        .horaf{
            margin-left: -85px;
            font-size: 24px;
        }
</style>

<div class="h-100 mt-5 bg-white text-center">
    <h1 style="font-size: 40px; color: blue; font-weight:bold;">Editar Evento</h1>

    <form action="editar_eve.php" method="post">
        <input type="hidden" name="id_editar" value="<?php echo $id; ?>">
        
        <!-- Agregar los campos del formulario según los atributos de la base de datos eventos -->
        <label for="fecha_editar" class="fecha">Fecha:</label>
        <input type="date" name="fecha_editar" value="<?php echo $row['fecha']; ?>" required>
        <br>
        <label for="hora_inicio_editar" class="horai">Hora de inicio:</label>
        <input type="time" name="hora_inicio_editar" value="<?php echo $row['hora_inicio']; ?>" required>
        <br>
        <label for="hora_fin_editar" class="horaf">Hora de fin:</label>
        <input type="time" name="hora_fin_editar" value="<?php echo $row['hora_fin']; ?>" required>
        <br>
        <button type="submit" class="btn btn-success">
            <i class="fa-solid fa-file-pen"></i> Guardar Cambios
        </button>
    </form>
</div>

<?php include("includes/footer.php"); ?>
