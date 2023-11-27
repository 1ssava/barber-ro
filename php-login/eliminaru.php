<!-- registro.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>

<?php 


    include("database.php");
    if(isset($_GET['id_usuario'])){
        $id = $_GET['id_usuario'];
        echo $id;
        $query = "DELETE FROM usuarios WHERE id_usuario = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            $_SESSION['message'] = "No se pudo eliminar";
            $_SESSION['message_type'] = 'danger';
            header("Location: editaru.php");
        }else{
            $_SESSION['message'] = "Usuario eliminado";
            $_SESSION['message_type'] = 'success';
            header("Location: editaru.php");
        }
    }
?>

</body>
</html>


