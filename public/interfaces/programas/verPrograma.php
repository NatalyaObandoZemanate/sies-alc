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
                    <h1 class="m-0">Datos del Programa</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content"
    style="display: flex;
            flex-direction: row;
            padding: 0;
            margin: 0;">
        <div class="container-fluid" style="padding: 0; margin: 10px; ">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Información general</h3>
                        </div>
                        <!-- Formulario de visualización de datos -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre_institucion">Institución</label>
                                <input type="text" class="form-control" id="nombre_institucion" name="nombre_institucion" value="<?php echo $nombre_institucion?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="ide_pro">SNIES</label>
                                <input type="text" class="form-control" id="ide_pro" name="ide_pro" value="<?php echo $ide_pro?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nom_pro">Programa</label>
                                <input type="text" class="form-control" id="nom_pro" name="nom_pro" value="<?php echo $nom_pro?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="cre_pro">Créditos académicos</label>
                                <input type="text" class="form-control" id="cre_pro" name="cre_pro" value="<?php echo $cre_pro?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="sem_pro">Duración estimada</label>
                                <input type="text" class="form-control" id="sem_pro" name="sem_pro" value="<?php echo $sem_pro?> semestres" disabled>
                            </div>
                            <div class="form-group">
                                <label for="per_egr">Perfil de egreso</label>
                                <textarea type="text" class="form-control" id="per_egr" name="per_egr" rows="5" disabled><?php echo $per_egr?></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <!--<a href="index.php?pk_id_institucion=<?php echo $pk_id_institucion?>&nombre_institucion=<?php echo $nombre_institucion?>" class="btn btn-secondary">Atrás</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <div class="container-fluid" style="padding: 0; margin: 10px; ">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Plan de estudios</h3>
                        </div>
                        <!-- Formulario de visualización de datos -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre_institucion">Institución</label>
                                <input type="text" class="form-control" id="nombre_institucion" name="nombre_institucion" value="<?php echo $nombre_institucion?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nom_pro">Programa</label>
                                <input type="text" class="form-control" id="nom_pro" name="nom_pro" value="<?php echo $nom_pro?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="per_egr">Perfil de egreso</label>
                                <textarea type="text" class="form-control" id="per_egr" name="per_egr" rows="5" disabled><?php echo $per_egr?></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="index.php?pk_id_institucion=<?php echo $pk_id_institucion?>&nombre_institucion=<?php echo $nombre_institucion?>" class="btn btn-secondary">Atrás</a>
                        </div>
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
