<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/resultados/controllerVerResultados.php';
//include '../controladores/resultados/controllerListarResultados.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Resultados de aprendizaje</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-bordered table-hover text-nowrap table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="table-dark" width="250"><center>Institución:</center></th>
                                                    <td class="table-info"><center><?php echo $nombre_institucion?></center></td>
                                                    <td class="table-info" width="300"><center>
                                                    <div class="btn-group">
                                                        <a href="../resultados/crearResultado.php?pro_id=<?php echo $pro_id?>"type="button" class="btn btn-success" title="Agregar Resultado"><i class="fa fa-plus-circle"></i> Agregar Resultado de aprendizaje</a>
                                                    </div>
                                                    </center></td>
                                                </tr>
                                                <tr>
                                                    <th class="table-dark" width="250"><center>Programa:</center></th>
                                                    <td class="table-secondary" colspan="2"><center><?php echo $nom_pro?></center></td>
                                                </tr>
                                            </thead>
                                        </table>
                                        <hr>
                                        <table class="table table-bordered table-hover text-nowrap table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="table-dark" width="50"><center>#</center></th>
                                                    <th class="table-dark" width="100"><center>Código</center></th>
                                                    <th class="table-dark" width="500"><center>Resultado de aprendizaje</center></th>
                                                    <th class="table-dark" width="150"><center>Indicadores</center></th>
                                                    <th class="table-dark" width="150"><center>Acciones</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador=0;
                                                $rap_id = "";
                                                $des_rap = "";
                                                foreach ($datos_resultados as $dato_resultado) {
                                                    $contador = $contador+1;
                                                    if ($countIdPro>0){
                                                        $rap_id = $dato_resultado['rap_id'];
                                                        $des_rap = $dato_resultado['des_rap'];
                                                    }
                                                    $pro_id = $dato_resultado['pro_id'];
                                                    if ($countIdPro>0) {
                                                ?>
                                                    <tr>
                                                        <td width="50"><?php echo $contador?></td>
                                                        <td width="100"></td>
                                                        <td width="500" style="text-overflow: ellipsis;"><?php echo $des_rap?></td>
                                                        <td width="150"><center>
                                                            <div class="btn-group">
                                                                <a href="../indicadores/index.php?rap_id=<?php echo $rap_id?>"type="button" class="btn btn-secondary" title="Competencias"><i class="fa fa-eye"></i></a>
                                                            </div>
                                                        </center></td>
                                                        <td width="150"><center>
                                                            <div class="btn-group">
                                                                <a href="actualizarResultado.php?rap_id=<?php echo $rap_id?>&pro_id=<?php echo $pro_id?>"type="button" class="btn btn-warning" title="Actualizar"><i class="fa fa-pencil-alt"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger" title="Eliminar" onClick="eliminar(<?php echo $rap_id?>)"><i class="fa fa-trash-alt"></i></button>
                                                            </div>
                                                        </center></td>
                                                    </tr>
                                                <?php
                                                    } else {
                                                        ?>
                                                        <tr></tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <hr>
                                    </div>
                                </div>
                            </div>
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
include '../../layout/mensajes.php';
include '../../layout/layout2.php';
?>

<script>
    function eliminar(rap_id){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: true
        });
        swalWithBootstrapButtons.fire({
            title: "¿Realmente desea eliminar este resultado de aprendizaje?",
            text: "¡Esta acción no se puede deshacer!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Sí, eliminar!",
            cancelButtonText: "¡No, cancelar!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location="<?php echo $URL ?>/controladores/resultados/controllerEliminarResultado.php?rap_id="+rap_id+"&pro_id=<?php echo $pro_id?>";
                swalWithBootstrapButtons.fire({
                    title: "¡Resultado de aprendizaje eliminado!",
                    text: "El resultado de aprendizaje seleccionado ha sido eliminado",
                    icon: "success"
                });
            } else if (
              // Read more about handling dismissals below
                result.dismiss === Swal.DismissReason.cancel
            ){
                swalWithBootstrapButtons.fire({
                    title: "Cancelado",
                    text: "El resultado de aprendizaje no sufrió cambios",
                    icon: "error"
                });
            }
        });
    }
</script>