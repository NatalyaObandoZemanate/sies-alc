<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/programas/controllerMostrarProgramas.php';
include '../../controladores/tiposIdentificacionProgramas/controllerListarIdentificacionesPrograma.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">Crear programa</h1>
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
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Diligencie los datos</h3>
                        </div>
                        <!-- Formulario de actualización de programas -->
                        <form action="<?php echo $URL?>/controladores/programas/controllerCrearPrograma.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <!-- Combobox para la selección del tipo de identificación del programa -->
                                    <label for="fk_ide_pro_id">Tipo de identificación</label>
                                    <select text class="form-control" id="fk_ide_pro_id" name="fk_ide_pro_id" required>
                                        <?php
                                        foreach ($datos_identificacion_programas as $dato_identificacion) {
                                        ?>
                                        <option value="<?php echo $dato_identificacion['ide_pro_id']?>"><?php echo $dato_identificacion['tip_ide_pro']?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ide_pro">Identificación del programa</label>
                                    <input type="text" class="form-control" id="ide_pro" name="ide_pro" placeholder="Ingrese el número registro del programa" required>
                                </div>
                                <div class="form-group">
                                    <label for="nom_pro">Nombre</label>
                                    <input type="text" class="form-control" id="nom_pro" name="nom_pro" placeholder="Ingrese el nombre del programa" required>
                                </div>
                                <div class="form-group">
                                    <label for="per_egr">Perfil de egreso</label>
                                    <textarea type="text" class="form-control" id="per_egr" name="per_egr" rows="5" placeholder="Ingrese el perfil de egreso del programa" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sem_pro">Semestres del programa</label>
                                    <input type="number" class="form-control" id="sem_pro" name="sem_pro" min="1" max="12" step="1" placeholder="Seleccione la cantidad de semestres del programa" required>
                                </div>
                                <div class="form-group">
                                    <label for="cre_pro">Créditos del programa</label>
                                    <input type="number" class="form-control" id="cre_pro" name="cre_pro" min="1" max="1000" step="1" placeholder="Seleccione la cantidad de créditos del programa" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="hidden" value="<?php echo $_GET['pk_id_institucion']?>" name="pk_id_institucion">
                                <input type="hidden" value="<?php echo $id?>" name="id">
                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Guardar</button>
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
