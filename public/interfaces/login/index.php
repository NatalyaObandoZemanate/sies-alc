<?PHP

include '../../configuracion.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SIES - ALC</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo $URL ?>/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="<?php echo $URL ?>/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo $URL ?>/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
      <!-- Theme css -->
      <link rel="stylesheet" href="../../css/style.css">
      <!-- SweetAlert -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <!-- jQuery -->
      <script src="<?php echo $URL ?>/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  </head>
  <body class="hold-transition login-page" style="display: flex; flex-direction:row; background-image: url('../../images/image1.jpeg'); background-size: cover; background-position: center; ">
    <?php
    session_start();
    if(isset($_SESSION['session_mensaje'])){
        $respuesta = $_SESSION['session_mensaje'].'!!';
        ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '<?php echo $respuesta ?>',
                showConfirmButton: false,
                timer: 1000
            });
        </script>
    <?php
    }
    ?>

    <div class="login-box">
      <!-- /.login -->
      <div class="card card-outline card-primary">

        <div class="card-body">
          <!--<p class="login-box-msg">Ingrese sus datos</p>-->

          <form action="<?php echo $URL ?>/controladores/login/controllerLogin.php" method="post">
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control col-md-10" id="email_usuario" name="email_usuario" size="50" placeholder="Correo electrónico">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <input type="password" class="form-control col-md-10" id="contrasena_usuario" name="contrasena_usuario" size="50" placeholder="Contraseña">
                <div class="input-group-append">
                  <span class="input-group-text" onclick="mostrarOcultarContrasena('contrasena_usuario')">
                    <i class="fas fa-eye"></i>
                  </span>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </div>
            <hr>
            <div class="col-12">
              <a href="./recuperarContrasena.php">¿Olvidó su contraseña?</a>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <div class="logo">
      <img src="../../images/logo.png" style="width: 400px; margin-left:30px;">
    </div>
    <!-- /.login-box -->

    <!-- Bootstrap 4 -->
    <script src="<?php echo $URL ?>/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $URL ?>/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>

    <!-- Script para mostrar u ocultar contraseña en el formulario de ingreso -->
    <script>
      function mostrarOcultarContrasena(idCampo) {
          var campo = document.getElementById(idCampo);
          var icono = campo.parentNode.querySelector('.input-group-text i');

          if (campo.type === 'password') {
              campo.type = 'text';
              icono.classList.remove('fa-eye');
              icono.classList.add('fa-eye-slash');
          } else {
              campo.type = 'password';
              icono.classList.remove('fa-eye-slash');
              icono.classList.add('fa-eye');
          }
      }
    </script>
  </body>
</html>