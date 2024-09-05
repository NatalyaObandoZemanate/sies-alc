<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/programas/controllerVerPrograma.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">Actualizar programa</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Diligencie los datos</h3>
                        </div>
                        <!-- Formulario de actualización de programas -->
                        <form action="<?php echo $URL?>/controladores/programas/controllerActualizarPrograma.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nom_pro">Nombre</label>
                                    <input type="text" class="form-control" id="nom_pro" name="nom_pro" value="<?php echo $nom_pro?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="per_egr">Perfil de egreso</label>
                                    <textarea type="text" class="form-control" id="per_egr" name="per_egr" rows="5" required><?php echo $per_egr?></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="hidden" value="<?php echo $pro_id?>" name="pro_id">
                                <input type="hidden" value="<?php echo $_GET['nombre_institucion']?>" name="nombre_institucion">
                                <input type="hidden" value="<?php echo $_GET['pk_id_institucion']?>" name="pk_id_institucion">
                                <a href="index.php?pk_id_institucion=<?php echo $_GET['pk_id_institucion']?>&nombre_institucion=<?php echo $_GET['nombre_institucion']?>" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-warning">Actualizar</button>
                            </div>
                        </form>
                    </div>
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
