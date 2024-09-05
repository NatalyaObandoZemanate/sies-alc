<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/asignaturas/controllerListarAsignaturas.php';

$nombre_institucion = $_GET['nombre_institucion'];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Asignaturas de <?php echo $nombre_institucion?></h1>
                    <hr>
                    <div class="btn-group">
                        <button type="button" class="btn btn-block bg-gradient-success" data-toggle="modal" data-target="#modal-create">
                            <i class="fas fa-book"></i> Nueva asignatura
                        </button>
                    </div>
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
                            <h3 class="card-title">Listado de asignaturas</h3>
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
                                                    <th><center>Asignatura</center></th>
                                                    <th><center>Rúbricas de evaluación</center></th>
                                                    <th><center>Acciones</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador=0;
                                                foreach ($datos_asignaturas as $dato_asignatura) {
                                                    $asi_id = $dato_asignatura['asi_id'];
                                                    $nom_asi = $dato_asignatura['nom_asi'];
                                                    $cod_asi = $dato_asignatura['cod_asi'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $contador= $contador+1?></td>
                                                        <td><?php echo $dato_asignatura['nom_asi']?></td>
                                                        <td>
                                                            <center>
                                                            <div class="btn-group">
                                                                <a href="../resultados/index.php?pro_id=<?php echo $pro_id?>" type="button" class="btn btn-secondary" title="Rúbrica de evaluación"><i class="fa fa-book"></i> Rúbrica</a>
                                                            </div>
                                                            </center>
                                                        </td>
                                                        <td>
                                                            <!-- Visualización de asignaturas -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-view-<?php echo $contador?>" title="Ver asignatura"><i class="fas fa-eye"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal fade" id="modal-view-<?php echo $contador?>">
                                                                <!-- Modal de visualización de asignatura -->
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg-info">
                                                                            <h4 class="modal-title">Ver asignatura</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <label for="nom_asi<?php echo $contador?>">Nombre</label>
                                                                                    <input type="text" class="form-control" id="nom_asi<?php echo $contador?>" value="<?php echo $nom_asi?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="cod_asi<?php echo $contador?>">Código</label>
                                                                                    <input type="text" class="form-control" id="cod_asi<?php echo $contador?>" value="<?php echo $cod_asi?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-between">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.modal-content -->
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- Fin visualización de asignaturas -->
                                                            <!-- Actualización de asignaturas -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-<?php echo $contador?>" title="Actualizar"><i class="fas fa-pencil-alt"></i>
                                                                </button>
                                                                <div class="modal fade" id="modal-update-<?php echo $contador?>">
                                                                <!-- Modal de actualización de asignaturas -->
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-warning">
                                                                                <h4 class="modal-title">Actualizar asignatura</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="card-body">
                                                                                    <div class="form-group">
                                                                                        <label for="nom_asi-<?php echo $contador?>">Nombre</label>
                                                                                        <input type="text" class="form-control" id="nom_asi-<?php echo $contador?>" value="<?php echo $nom_asi?>" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="cod_asi-<?php echo $contador?>">Código</label>
                                                                                        <input type="text" class="form-control" id="cod_asi-<?php echo $contador?>" value="<?php echo $cod_asi?>" required>
                                                                                    </div>
                                                                                    <input type="hidden" id="pk_id_institucion" value="<?php echo $_GET['pk_id_institucion'] ?>">
                                                                                    <input type="hidden" id="nombre_institucion" value="<?php echo $nombre_institucion ?>">
                                                                                    <input type="hidden" id="asi_id-<?php echo $contador?>" value="<?php echo $asi_id ?>">
                                                                                    <input type="hidden" id="usu_mod_asi-<?php echo $contador?>" value="<?php echo $session_pk_id_usuario ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-between">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                                                                                <button type="submit" class="btn btn-warning" id="btn_actualizar-<?php echo $contador?>">Actualizar</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                                <!--Script para el manejo de las acciones del modal de actualización de asignaturas-->
                                                                <script>
                                                                    $("#btn_actualizar-<?php echo $contador?>").click(function () {
                                                                        var pk_id_institucion = $('#pk_id_institucion').val();
                                                                        var nombre_institucion = $('#nombre_institucion').val();
                                                                        var asi_id = $('#asi_id-<?php echo $contador?>').val();
                                                                        var nom_asi = $('#nom_asi-<?php echo $contador?>').val();
                                                                        var cod_asi = $('#cod_asi-<?php echo $contador?>').val();
                                                                        var usu_mod_asi = $('#usu_mod_asi-<?php echo $contador?>').val();

                                                                        var url = '../../controladores/asignaturas/controllerModalActualizarAsignatura.php';

                                                                        $.post(url, {pk_id_institucion, nombre_institucion, asi_id, nom_asi, cod_asi, usu_mod_asi}, function (datos) {
                                                                            $('#respuesta_actualizar-<?php echo $contador?>').html(datos);
                                                                        });
                                                                    });
                                                                </script>
                                                                <div id="respuesta_actualizar-<?php echo $contador?>"></div>
                                                            </div>
                                                            <!-- Fin actualización de usuarios -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger" title="Eliminar" onClick="eliminar(<?php echo $asi_id?>)"><i class="fa fa-trash-alt"></i></button>
                                                            </div>
                                                        </td>
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

<!--Modal de registro de asignaturas-->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Nueva asignatura</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de registro de asignatura -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="nom_asi">Nombre</label>
                        <input type="text" class="form-control" id="nom_asi" name="nom_asi" placeholder="Ingrese el nombre de la asignatura" required>
                    </div>
                    <div class="form-group">
                        <label for="cod_asi">Código</label>
                        <input type="text" class="form-control" id="cod_asi" name="cod_asi" placeholder="Ingrese el código de la asignatura" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="fk_pk_id_institucion" name="fk_pk_id_institucion" value="<?php echo $_GET['pk_id_institucion']?>">
                        <input type="hidden" id="nombre_institucion" name="nombre_institucion" value="<?php echo $nombre_institucion?>">
                        <input type="hidden" id="usu_mod_asi" name="usu_mod_asi" value="<?php echo $session_pk_id_usuario?>">
                    </div>
                </div>
            </div>
            <div id="respuesta"></div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success" id="btn_guardar">Guardar</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--Script para el manejo de las acciones del modal de registro de asignaturas-->
<script>
    $("#btn_guardar").click(function () {
        var nom_asi = $('#nom_asi').val();
        var cod_asi = $('#cod_asi').val();
        var fk_pk_id_institucion = $('#fk_pk_id_institucion').val();
        var usu_mod_asi = $('#usu_mod_asi').val();

        var url = '../../controladores/asignaturas/controllerModalCrearAsignatura.php';
        $.post(url, {nom_asi, cod_asi, fk_pk_id_institucion, usu_mod_asi}, function (datos) {
            $('#respuesta').html(datos);
        })
    });
</script>
<!--<div id="respuesta"></div>-->

<!--Script para el manejo de la tabla-->
<script>
    $(function () {
        $("#example1").DataTable({
            /* cambio de idiomas de datatable */
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Asignaturas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Asignaturas",
                "infoFiltered": "(Filtrado de _MAX_ total Asignaturas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Asignaturas",
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

<!--Script para eliminación de asignaturas-->
<script>
    function eliminar(asi_id){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: true
        });
        swalWithBootstrapButtons.fire({
            title: "¿Realmente desea eliminar esta asignatura?",
            text: "¡Esta acción no se puede deshacer!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Sí, eliminar!",
            cancelButtonText: "¡No, cancelar!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location="<?php echo $URL ?>/controladores/asignaturas/controllerEliminarAsignatura.php?asi_id="+asi_id;
                swalWithBootstrapButtons.fire({
                    title: "¡Asignatura eliminada!",
                    text: "La asignatura seleccionada ha sido eliminada",
                    icon: "success"
                });
            } else if (
              // Read more about handling dismissals below
                result.dismiss === Swal.DismissReason.cancel
            ){
                swalWithBootstrapButtons.fire({
                    title: "Cancelado",
                    text: "La asignatura no sufrió cambios",
                    icon: "error"
                });
            }
        });
    }
</script>