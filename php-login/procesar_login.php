<?php
session_start();
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Validación básica de campos no vacíos
    if (empty($usuario) || empty($password)) {
        header("Location: login.php?error=CamposVacíos");
        exit();
    }

    // Realiza la validación en la base de datos
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario' AND contraseña = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Verifica si se encontraron registros
        if (mysqli_num_rows($result) == 1) {
            // Inicio de sesión exitoso
            $usuario_info = mysqli_fetch_assoc($result);
            $_SESSION['usuario'] = $usuario_info['nombre_usuario'];
            $_SESSION['rol'] = $usuario_info['rol'];

            if ($_SESSION['rol'] == 'cliente') {
                header("Location: inicio_exitocl.php");
            } elseif ($_SESSION['rol'] == 'admin') {
                header("Location: inicio_exitoad.php");
            }
            exit();
        } else {
            // Credenciales incorrectas
            header("Location: login.php?error=CredencialesIncorrectas");
            exit();
        }
    } else {
        // Error en la consulta
        echo "Error: " . mysqli_error($conn);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conn);
} else {
    // Si no es una solicitud POST, redirige a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
