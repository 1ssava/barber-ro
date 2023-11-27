<?php 
session_start();
include("database.php");
include("includes/header.php");


if (isset($_POST['registrar'])) {
    // Obtén los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $fono = $_POST['fono'];
    $birthday = $_POST['birthday'];

    // Verifica si hay campos vacíos
    if (empty($nombre) || empty($apellido) || empty($usuario) || empty($correo) || empty($password) || empty($fono) || empty($birthday)) {
        $_SESSION['message'] = 'Todos los campos son obligatorios. Por favor, completa el formulario.';
        $_SESSION['message_type'] = 'danger';
        header("Location: signup.php");
        exit();
    }

    // Si no hay campos vacíos, procede con el registro
    $query = "INSERT INTO usuarios(nombre, apellido, rol, cumpleaños, email, contraseña, telefono, nombre_usuario) 
              VALUES('$nombre', '$apellido','cliente','$birthday','$correo','$password','$fono','$usuario')";
    var_dump($query);
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['message'] = 'Te registraste exitosamente.';
        $_SESSION['message_type'] = 'success';
        header("Location: signup.php");
        exit();
    } else {
        $_SESSION['message'] = 'Error en el registro. Inténtalo nuevamente.';
        $_SESSION['message_type'] = 'danger';
        header("Location: signup.php");
        exit();
        echo "Error en la consulta: " . mysqli_error($conn);
    }
}
?>
