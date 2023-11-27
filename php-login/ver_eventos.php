<?php
include("database.php");
include("includes/header.php");
?>

<style>
    .desc {
        text-align: left;
        font-size: 23px;
    }

    .cant {
        margin-top: 5px;
        margin-left: 28px;
        font-size: 23px;
    }

    .boton {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        margin-right: 20px;
        /* Ajusta el valor según sea necesario */
        text-decoration: none;
        color: #fff;
        background-color: #1E609A;
        border-radius: 5px;
    }
</style>

<div class="h-100 mt-5 bg-white text-center">
    <h1 style="font-size: 40px; color: blue; font-weight:bold;">Lista de Eventos</h1>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT id, fecha, hora_inicio, hora_fin FROM eventos";

            $result_events = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result_events)) { ?>
                <tr>
                    <td><?php echo $row['fecha'] ?></td>
                    <td><?php echo $row['hora_inicio'] ?></td>
                    <td><?php echo $row['hora_fin'] ?></td>
                    <td>
                        <a href="editar_eve.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                            <i class="fa-solid fa-file-pen"></i>
                        </a>
                        <a href="eliminar_eve.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                            <i class="fa-solid fa-eraser"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div>
        <a href="inicio_exitoad.php" class="boton">Volver al inicio</a>
    </div>
</div>

<?php include("includes/footer.php") ?>
