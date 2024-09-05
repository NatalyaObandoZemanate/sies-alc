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
  <body class="hold-transition login-page" style="display: flex; flex-direction:row; background-image: url('../../images/estudiantes.jpg'); background-size: cover; background-position: center; ">
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

          <form action="" method="post">
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
            <hr>
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Recuperar contraseña</button>
            </div>
            <hr>
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
6  </body>
</html>