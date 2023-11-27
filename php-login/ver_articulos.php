<?php
include("database.php");
include("includes/header.php");
?>
    <style>
        .desc{
            text-align: left;
            font-size: 23px;
        }
        .cant{
            margin-top: 5px;
            margin-left: 28px;
            font-size: 23px;
        }    
        .boton {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        margin-right: 20px; /* Ajusta el valor según sea necesario */
        text-decoration: none;
        color: #fff;
        background-color: #1E609A;
        border-radius: 5px;
         }


    </style>
    <div class="h-100 mt-5 bg-white text-center">
    <h1 style="font-size: 40px; color: blue; font-weight:bold;">Lista de Artículos</h1>
    <form action="aña_arti.php" method="post">
        <label for="descripcion" class="desc">Descripción:</label>
        <input type="text" name="descripcion" required>
        
        <label for="cantidad"class="cant">Cantidad:</label>
        <input type="number" name="cantidad" required>

        <button type="submit" class="btn btn-success">
            <i class="fa-solid fa-plus"></i> Añadir Artículo
        </button>
    </form>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT id_articulo, descripcion, cantidad FROM articulos";

            $result_task = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result_task)){?>
                <tr>
                    <td><?php echo $row['descripcion']?></td>
                    <td><?php echo $row['cantidad']?></td>
                    <td>
                        <a href="edit_articulos.php?id_articulo=<?php echo $row['id_articulo']?>" class="btn btn-secondary">
                            <i class="fa-solid fa-file-pen"></i>
                        </a>
                        <a href="eliminar_arti.php?id_articulo=<?php echo $row['id_articulo']?>" class="btn btn-danger">
                            <i class="fa-solid fa-eraser"></i>
                        </a>
                    </td>
                </tr>
            <?php }?>
        </tbody>

    </table>

    <script>

</script>
</div>
<div>
    <a href="inicio_exitoad.php" class="boton">Volver al inicio</a>
</div>
<?php include("includes/footer.php")?>

