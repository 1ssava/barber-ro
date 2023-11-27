<?php include("includes/header.php")?>
<?php include("database.php")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #branding {
            border-radius: 10px;
            background-color: #1E609A;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        #branding a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.5em;
        }

        #login-form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <!-- Encabezado (Nombre de la página) -->
    <div id="branding">
        <a href="index.php">Barber-RO</a>
    </div>

    <section class="vh-100 gradient-custom">

    <form action="procesar_login.php" method="POST">
    <div class="container py-5 h-100">
     <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Inicio de Sesión</h2>

                <!-- Mostrar mensaje de validación -->
                <?php if(isset($_GET['error']) && $_GET['error'] == 'CredencialesIncorrectas') { ?>
                    <p class="text-danger">Error: Credenciales incorrectas. Por favor, verifica tus datos.</p>
                <?php } elseif(isset($_GET['error']) && $_GET['error'] == 'CamposVacíos') { ?>
                    <p class="text-danger">Error: Todos los campos son obligatorios. Por favor, completa el formulario.</p>
                <?php } ?>

                <p class="text-white-50 mb-5">Por favor ingresa tu usuario y contraseña!</p>

                <div class="form-outline form-white mb-4">
                      <input type="text" id="usuario" class="form-control form-control-lg" name="usuario" required />
                      <label class="form-label" id="usuario">Usuario</label>
                </div>

                <div class="form-outline form-white mb-4">
                <input type="password" id="password" class="form-control form-control-lg" name="password" required />
                <label class="form-label" id="pasword">Contraseña</label>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="lostpass.php">Olvidaste tu contraseña?</a></p>

                <button class="btn btn-primary btn-lg px-5" type="submit" name="submit">Iniciar Sesión</button>

              </div>

              <div>
              <p class="mb-0">No tienes una cuenta? <a href="signup.php" class="text-white-50 fw-bold">Regístrate!</a>
              </p>
              </div>

            </div>
         </div>
       </div>
     </div>
    </div>
    </form>

</section>

</body>
</html>

<?php include("includes/footer.php")?>
