<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIES - ALC</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo $URL?>/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $URL?>/templates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $URL?>/templates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $URL?>/templates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $URL?>/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script
    <!-- jQuery -->
    <script src="<?php echo $URL?>/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  </head>
  <body class="hold-transition sidebar-mini">
    <!-- Alert de ingreso correcto
    <script>
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Ha ingresado correctamente <?php echo $session_email_usuario ?>',
          showConfirmButton: false,
          timer: 2500
        });
    </script>
    -->
    <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#2C3E50; color:#ffffff;">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="background-color:#2C3E50; color:#ffffff"><i class="fas fa-bars"></i></a>
          </li>
          </ul>

        <!-- Muestra el usuario que está en uso -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            Ha ingresado como <?php echo $session_nombre_usuario?>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#2C3E50">
        <!-- Brand Logo -->
        <a href="<?php echo $URL?>" class="brand-link">
          <img src="<?php echo $URL?>/images/logo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><b>SIES - ALC</b></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?php echo $URL?>/templates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo $session_nombre_usuario ?></a>
            </div>
          </div>

          <!-- Se incluye el menú según el rol que ingresa al sistema -->
          <?php
            if ($session_nombre_rol=='Administrador') {
              include 'layout_administrador.php';
            } elseif ($session_nombre_rol=='Director') {
              include 'layout_director.php';
            } elseif ($session_nombre_rol=='Profesor') {
              include 'layout_profesor.php';
            }
          ?>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Módulo de datos -->
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-address-card"></i>
                  <p>Mis datos<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $URL?>/interfaces/usuarios/actualizarUsuario.php?pk_id_usuario=<?php echo $session_pk_id_usuario?>" class="nav-link">
                      <i class="fas fa-pen nav-icon"></i>
                      <p>Actualizar datos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $URL?>/interfaces/usuarios/actualizarContrasena.php?pk_id_usuario=<?php echo $session_pk_id_usuario?>" class="nav-link">
                      <i class="fas fa-key nav-icon"></i>
                      <p>Actualizar contraseña</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- Módulo de cierre de sesión -->
              <li class="nav-item">
                <a href="<?php echo $URL?>/controladores/login/controllerLogout.php" class="nav-link" style="background: #8b0000">
                  <i class="nav-icon fas fa-door-closed"></i>
                  <p>Cerrar sesión</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- Fin de menú -->
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
