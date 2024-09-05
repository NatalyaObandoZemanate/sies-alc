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
                    <h1 class="m-0">Crear resultado de aprendizaje</h1>
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
                        <!-- Formulario de creación de resultados de aprendizaje -->
                        <form action="<?php echo $URL?>/controladores/resultados/controllerCrearResultado.php" method="post">
                            <div class="card-body">
                                <input type="hidden" name="pro_id" value="<?php echo $_GET['pro_id']?>">
                                <div class="form-group">
                                    <label for="des_rap">Resultado de aprendizaje</label>
                                    <textarea type="text" class="form-control" id="des_rap" name="des_rap" rows="5" placeholder="Digite el resultado de aprendizaje" required></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="index.php?pro_id=<?php echo $_GET['pro_id']?>" class="btn btn-secondary">Cancelar</a>
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
