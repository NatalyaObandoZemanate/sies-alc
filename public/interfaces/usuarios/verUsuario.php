<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/usuarios/controllerVerUsuario.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">Datos de usuario</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Consulta de datos</h3>
                </div>
                <!-- Formulario de visualización de datos -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="identificacion_usuario">Identificación</label>
                            <input type="text" class="form-control" id="identificacion_usuario" name="identificacion_usuario" value="<?php echo $identificacion_usuario?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nombre_usuario">Nombre</label>
                            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" value="<?php echo $nombre_usuario?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nombre_rol">Rol del usuario</label>
                            <input type="text" class="form-control" id="nombre_rol" name="nombre_rol" value="<?php echo $nombre_rol?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="telefono_usuario">Teléfono</label>
                            <input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario" value="<?php echo $telefono_usuario?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email_usuario">Email</label>
                            <input type="email" class="form-control" id="email_usuario" name="email_usuario" value="<?php echo $email_usuario?>" disabled>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="index.php" class="btn btn-secondary">Atrás</a>
                    </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include '../../layout/layout2.php';
?>
