<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/resultados/controllerVerResultados.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">Actualizar resultado de aprendizaje</h1>
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
                        <!-- Formulario de creación de resultados de aprendizaje -->
                        <form action="<?php echo $URL?>/controladores/resultados/controllerActualizarResultado.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="des_rap">Resultado de aprendizaje</label>
                                    <textarea type="text" class="form-control" id="des_rap" name="des_rap" required><?php echo $dato_resultado['des_rap']?></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="hidden" name="rap_id" value="<?php echo $_GET['rap_id']?>">
                                <input type="hidden" name="pro_id" value="<?php echo $pro_id?>">
                                <a href="index.php?pro_id=<?php echo $dato_resultado['pro_id']?>" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-warning">Guardar</button>
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
