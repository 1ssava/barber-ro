<?php 
session_start();
include("includes/header.php")
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>

    <!-- Agrega los enlaces a Bootstrap y Bootstrap Datepicker -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">

    <!-- Incluye tu estilo personalizado -->
    <style>
        .volverInicio{
            font-size: 21px;
            text-align: center;
            margin-bottom: auto;
        }
        .yatienescuenta{
            font-size: 21px;
             text-align: center;
             padding-bottom: 50px;
        }

    </style>

    <!-- Inicializa el Datepicker -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>


    <script>
       $(document).ready(function(){
            $('#cumpleaños').datepicker({
                   format: 'yyyy/mm/dd',
                   autoclose: true
           });
       });
    </script>
</head>
<body>

    <!-- Tu formulario de registro aquí -->
 <section class="vh-100 gradient-custom">
 <form action="registrar.php" method="POST">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registro</h3>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="nombre" class="form-control form-control-lg" name="nombre" required="" pattern="[a-zA-Zá-úÁ-ÚüÜñÑ ]+" />
                    <label class="form-label" for="nombre">Nombre</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="apellido" class="form-control form-control-lg" name="apellido" required="" pattern="[a-zA-Zá-úÁ-ÚüÜñÑ ]+" />
                    <label class="form-label" for="apellido">Apellido</label>
                  </div>

                </div>
              </div>

              <div class="row">
                 <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="text" id="usuario" class="form-control form-control-lg" name="usuario" required="" />
                      <label class="form-label" for="usuario">Usuario</label>
                    </div>

                    </div>
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="cumpleaños" name="birthday"  required="" />
                    <label for="cumpleaños" class="form-label">Cumpleaños</label>
                  </div>

                </div>

              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="correo" class="form-control form-control-lg" name="correo"  required="@" />
                    <label class="form-label" for="correo">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="numTelefono" class="form-control form-control-lg" name="fono"  required="" pattern="[0-9]+" />
                    <label class="form-label" for="numTelefono">Número de Teléfono</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" id="password" class="form-control form-control-lg" name="password"  required="" />
                    <label class="form-label" for="pasword">Contraseña</label>
                  </div>

                </div>
              </div>

              <?php if(isset($_SESSION['message'])) {?>
                        <div class="row">
                          <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['message'] ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        </div>
                        
                      <?php session_unset();}?>
                      <?php
                            // Verifica si hay un mensaje en la sesión
                            if (isset($_SESSION['message'])) {
                                ?>
                                <div class="row">
                                    <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                                        <?= $_SESSION['message'] ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                                <?php
                                // Limpia el mensaje de la sesión para que no aparezca en futuras recargas
                                unset($_SESSION['message']);
                                unset($_SESSION['message_type']);
                            }
                            ?>        
              <div class="mt-4 pt-2">
                <input type="submit" value="Enviar" class="btn btn-warning btn-lg ms-2" name="registrar">
              </div>
              <div class="volverInicio">
                <a href="index.php">Volver al Inicio</a>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
     <div class="yatienescuenta">
         <p class="mb-0">Ya tienes una cuenta? <a href="login.php" class="text-white-50 fw-bold">Inicia sesión!</a>
          </p>
      </div>

  </body>
</html>