<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/roles/controllerVerRol.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">Actualizar rol</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Diligencie los datos</h3>
                </div>
                <!-- Formulario de actualización de roles -->
                <form action="<?php echo $URL?>/controladores/roles/controllerActualizarRol.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre_rol">Nombre</label>
                            <input type="text" class="form-control" id="nombre_rol" name="nombre_rol" value="<?php echo $nombre_rol?>" placeholder="Ingrese el nombre del rol" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion_rol">Descripción</label>
                            <input type="text" class="form-control" id="descripcion_rol" name="descripcion_rol" value="<?php echo $descripcion_rol?>" placeholder="Detalle del rol" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pk_id_rol" value="<?php echo $pk_id_rol?>">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include '../../layout/layout2.php';
?>

