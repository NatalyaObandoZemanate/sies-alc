<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';

//Selección del controlador usado para mostrar los programas
if (isset($_GET['pk_id_institucion'])) {
    //Se usa mostrar los programas de una institución específica
    $text= ' de ';
    include '../../controladores/programas/controllerListaProgramas.php';
} else {
    //Se usa para todos los programas
    $text= '';
    $nombre_institucion = '';
    include '../../controladores/programas/controllerMostrarProgramas.php';
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de programas <?php echo $text?> <?php echo $nombre_institucion?></h1>
                    <?php
                    if (isset($_GET['pk_id_institucion'])) {
                        ?>
                        <hr>
                        <div class="btn-group">
                        <a href="../programas/crearPrograma.php?pk_id_institucion=<?php echo $_GET['pk_id_institucion']?>" type="button" class="btn btn-block bg-gradient-success" title="Nueva institución"><i class="fa fa-building"></i> Nuevo programa</a>
                        </div>
                        <?php
                    } else {
                        ?>
                        <hr>
                        <?php
                    }
                    ?>
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
                            <h3 class="card-title">Programas</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive p-0">
                                        <table id="example1" class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th><center>#</center></th>
                                                    <th><center>Nombre</center></th>
                                                    <th><center>Resultados <br>de aprendizaje</center></th>
                                                    <th><center>Plan de estudios</center></th>
                                                    <th><center>Acciones</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador=0;
                                                foreach ($datos_programas as $dato_programa) {
                                                    $pro_id = $dato_programa['pro_id'];
                                                    $pk_id_institucion = $dato_programa['fk_pk_id_institucion'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $contador= $contador+1?></td>
                                                        <td><?php echo $dato_programa['nom_pro']?></td>
                                                        <td>
                                                            <center>
                                                            <div class="btn-group">
                                                                <a href="../resultados/index.php?pro_id=<?php echo $pro_id?>" type="button" class="btn btn-secondary" title="Resultados de aprendizaje"><i class="fa fa-book"></i> RA</a>
                                                            </div>
                                                            <!--
                                                            <div class="btn-group">
                                                                <a href="../competencias/index.php?idIns=<?php echo $pro_id?>"type="button" class="btn btn-secondary" title="Competencias"><i class="fa fa-book"></i> Competencias</a>
                                                            </div>
                                                            -->
                                                            </center>
                                                        </td>
                                                        <td>
                                                            <center>
                                                            <div class="btn-group">
                                                                <a href="../planEstudios/index.php?pk_id_institucion=<?php echo $pk_id_institucion?>&pro_id=<?php echo $pro_id?>" type="button" class="btn btn-info" title="Ver plan de estudios"><i class="fa fa-list"></i> Ver plan de estudios</a>
                                                            </div>
                                                            </center>
                                                        </td>
                                                        <td><center>
                                                            <div class="btn-group">
                                                                <a href="verPrograma.php?pro_id=<?php echo $pro_id?>" type="button" class="btn btn-info" title="Ver" title="Ver"><i class="fa fa-eye"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a href="actualizarPrograma.php?pro_id=<?php echo $pro_id?>&nombre_institucion=<?php echo $nombre_institucion?>&pk_id_institucion=<?php echo $pk_id_institucion?>" type="button" class="btn btn-warning" title="Actualizar"><i class="fa fa-pencil-alt"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger" title="Eliminar" onClick="eliminar(<?php echo $pro_id?>, <?php echo $pk_id_institucion?>)"><i class="fa fa-trash-alt"></i></button>
                                                            </div>
                                                        </center></td>
                                                    </tr>
                                                <?php
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
    $(function () {
        $("#example1").DataTable({
            /* cambio de idiomas de datatable */
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Programas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Programas",
                "infoFiltered": "(Filtrado de _MAX_ total Programas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Programas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            /* fin de idiomas */
            "responsive": true, "lengthChange": true, "autoWidth": false,
            /* Ajuste de botones */
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy'
                }, {
                    extend: 'pdf',
                }, {
                    extend: 'csv',
                }, {
                    extend: 'excel',
                }, {
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas'
                }
            ],
            /*Fin de ajuste de botones*/
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<script>
    function eliminar(pro_id, pk_id_institucion){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: true
        });
        swalWithBootstrapButtons.fire({
            title: "¿Realmente desea eliminar este programa?",
            text: "¡Esta acción no se puede deshacer!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Sí, eliminar!",
            cancelButtonText: "¡No, cancelar!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location="<?php echo $URL ?>/controladores/programas/controllerEliminarPrograma.php?pro_id="+pro_id+"&pk_id_institucion="+pk_id_institucion;
                swalWithBootstrapButtons.fire({
                    title: "¡Programa eliminado!",
                    text: "El programa seleccionado ha sido eliminado",
                    icon: "success"
                });
            } else if (
              // Read more about handling dismissals below
                result.dismiss === Swal.DismissReason.cancel
            ){
                swalWithBootstrapButtons.fire({
                    title: "Cancelado",
                    text: "El programa no sufrió cambios",
                    icon: "error"
                });
            }
        });
    }
</script>