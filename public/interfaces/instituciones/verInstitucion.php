<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/instituciones/controllerVerInstitucion.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">Datos de la institución</h1>
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
                            <label for="tip_codigo_institucion">Tipo de identificación</label>
                            <input type="text" class="form-control" id="tip_codigo_institucion" name="tip_codigo_institucion" value="<?php echo $tip_codigo_institucion?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="codigo_institucion">Identificación</label>
                            <input type="text" class="form-control" id="codigo_institucion" name="codigo_institucion" value="<?php echo $codigo_institucion?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nombre_institucion">Nombre</label>
                            <input type="text" class="form-control" id="nombre_institucion" name="nombre_institucion" value="<?php echo $nombre_institucion?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nombre_pais">País</label>
                            <input type="text" class="form-control" id="nombre_pais" name="nombre_pais" value="<?php echo $nombre_pais?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nombre_estado">Estado</label>
                            <input type="text" class="form-control" id="nombre_estado" name="nombre_estado" value="<?php echo $nombre_estado?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nombre_ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="nombre_ciudad" name="nombre_ciudad" value="<?php echo $nombre_ciudad?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="telefono_institucion">Teléfono</label>
                            <input type="text" class="form-control" id="telefono_institucion" name="telefono_institucion" value="<?php echo $telefono_institucion?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email_institucion">Email</label>
                            <input type="email" class="form-control" id="email_institucion" name="email_institucion" value="<?php echo $email_institucion?>" disabled>
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
