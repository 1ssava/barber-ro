<?php 
include("includes/header.php")?>
<?php include("database.php")?>

<?php if(isset($_SESSION['message'])) {?>
    <div class="row">
        <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <?php session_unset();
} ?>
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Cumpleaños</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM usuarios";
                
                $result_task = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result_task)){?>
                    <tr>
                        <td><?php echo $row['nombre_usuario']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['cumpleaños']?></td>
                        <td>
                            <a href="eliminaru.php?id_usuario=<?php echo $row['id_usuario']?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <a href="inicio_exitoad.php" class="btn btn-primary">Volver al inicio</a>
    </div>
</div>

<?php include("includes/footer.php")?>