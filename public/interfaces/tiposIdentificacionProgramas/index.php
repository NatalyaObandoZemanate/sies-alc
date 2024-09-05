<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/tiposIdentificacionProgramas/controllerListarIdentificacionesPrograma.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tipos de identificación de programas</h1>
                    <hr>
                    <div class="btn-group">
                        <button type="button" class="btn btn-block bg-gradient-success" data-toggle="modal" data-target="#modal-create">
                            <i class="fas fa-plus"></i> Nuevo
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
                            <h3 class="card-title">Identificaciones de programas</h3>
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
                                                    <th><center>Acciones</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador=0;
                                                foreach ($datos_identificacion_programas as $dato_identificacion_programa) {
                                                    $ide_pro_id = $dato_identificacion_programa['ide_pro_id'];
                                                    $tip_ide_pro = $dato_identificacion_programa['tip_ide_pro'];
                                                    $des_tip_pro = $dato_identificacion_programa['des_tip_pro'];
                                                ?>
                                                    <tr>
                                                        <td><center><?php echo $contador = $contador+1?></center></td>
                                                        <td><center><?php echo $tip_ide_pro?></center></td>
                                                        <td>
                                                            <!-- Visualización de tipos de identificación -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-view-<?php echo $contador?>" title="Ver"><i class="fas fa-eye"></i>
                                                                </button>
                                                            </div>
                                                            <!-- Modal de visualización de tipos de identificación -->
                                                            <div class="modal fade" id="modal-view-<?php echo $contador?>">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg-info">
                                                                            <h4 class="modal-title">Ver tipo</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <input type="hidden" id="pk_id_usuario<?php echo $contador?>" value="<?php echo $pk_id_usuario ?>">
                                                                                    <input type="hidden" id="session_pk_id_usuario<?php echo $contador?>" value="<?php echo $session_pk_id_usuario ?>">
                                                                                    <label for="tip_ide_pro<?php echo $contador?>">Nombre</label>
                                                                                    <input type="text" class="form-control" id="tip_ide_pro<?php echo $contador?>" value="<?php echo $tip_ide_pro?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="des_tip_pro<?php echo $contador?>">Descripción</label>
                                                                                    <textarea type="text" class="form-control" id="des_tip_pro" name="des_tip_pro" rows="5" disabled><?php echo $des_tip_pro?></textarea>
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
                                                            <!-- Fin visualización de tipos de identificación -->
                                                            <!-- Actualización de tipos de identificación -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-<?php echo $contador?>" title="Actualizar"><i class="fas fa-pencil-alt"></i>
                                                                </button>
                                                                <div class="modal fade" id="modal-update-<?php echo $contador?>">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-warning">
                                                                                <h4 class="modal-title">Actualizar tipo de identificación</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="card-body">
                                                                                    <div class="form-group">
                                                                                        <input type="hidden" id="ide_pro_id-<?php echo $contador?>" value="<?php echo $ide_pro_id ?>">
                                                                                        <input type="hidden" id="session_pk_id_usuario-<?php echo $contador?>" value="<?php echo $session_pk_id_usuario ?>">
                                                                                        <label for="identificacion_usuario-<?php echo $contador?>">Nombre</label>
                                                                                        <input type="text" class="form-control" id="tip_ide_pro-<?php echo $contador?>" value="<?php echo $tip_ide_pro?>" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="des_tip_pro-<?php echo $contador?>">Descripción</label>
                                                                                        <textarea type="text" class="form-control" id="des_tip_pro-<?php echo $contador?>" rows="5" required><?php echo $des_tip_pro?></textarea>
                                                                                    </div>
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
                                                                <!--Script para el manejo de las acciones del modal de actualización de tipos de identificación-->
                                                                <script>
                                                                    $("#btn_actualizar-<?php echo $contador?>").click(function () {
                                                                        var ide_pro_id = $('#ide_pro_id-<?php echo $contador?>').val();
                                                                        var tip_ide_pro = $('#tip_ide_pro-<?php echo $contador?>').val();
                                                                        var des_tip_pro = $('#des_tip_pro-<?php echo $contador?>').val();
                                                                        var session_pk_id_usuario = $('#session_pk_id_usuario-<?php echo $contador?>').val();

                                                                        var url = '../../controladores/tiposIdentificacionProgramas/controllerActualizarTipoIdentificacionPrograma.php';

                                                                        $.post(url, {ide_pro_id, tip_ide_pro, des_tip_pro, session_pk_id_usuario}, function (datos) {
                                                                            $('#respuesta_actualizar-<?php echo $contador?>').html(datos);
                                                                        });
                                                                    });
                                                                </script>
                                                                <div id="respuesta_actualizar-<?php echo $contador?>"></div>
                                                            </div>
                                                            <!-- Fin actualización de usuarios -->
                                                            <!-- Eliminación de tipos de identificación -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger" title="Eliminar" onClick="eliminar(<?php echo $ide_pro_id?>)"><i class="fa fa-trash-alt"></i></button>
                                                            </div>
                                                            <!-- Fin eliminación de tipos de identificación -->
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

<!--Modal de registro de nuevos tipos-->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Nuevo tipo de identificación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <label for="tip_ide_pro">Nombre</label>
                        <input type="text" class="form-control" id="tip_ide_pro" name="tip_ide_pro" placeholder="Ingrese el nombre de la identificación" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una breve descripción del tipo de identificación"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="index.php" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                    <input type="hidden" id="session_pk_id_usuario" name="session_pk_id_usuario" value="<?php echo $session_pk_id_usuario?>">
                    <button type="submit" class="btn btn-success" id="btn_registrar">Registrar</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--Script para el manejo de las acciones del modal de registro-->
<script>
    $("#btn_registrar").click(function () {
        //alert ("Ingresó");

        var tip_ide_pro = $('#tip_ide_pro').val();
        var des_tip_pro = $('#descripcion').val();
        var session_pk_id_usuario = $('#session_pk_id_usuario').val();
        //alert (des_tip_pro);

        var url = '../../controladores/tiposIdentificacionProgramas/controllerCrearTipoIdentificacionPrograma.php';
        $.post(url, {tip_ide_pro, des_tip_pro, session_pk_id_usuario}, function (datos) {
            $('#respuesta').html(datos);

        })
       //alert ("Ingresó");
    });
</script>
<div id="respuesta"></div>

<!--Script para el manejo de la tabla-->
<script>
    $(function () {
        $("#example1").DataTable({
            /* cambio de idiomas de datatable */
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Tipos de Programas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Tipos de Programas",
                "infoFiltered": "(Filtrado de _MAX_ total Tipos de Programas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Tipos de Programas",
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
            /* Ajuste de botones
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

<!--Script para eliminación-->
<script>
    function eliminar(ide_pro_id){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: true
        });
        swalWithBootstrapButtons.fire({
            title: "¿Realmente desea eliminar este tipo de identificación de programa?",
            text: "¡Esta acción no se puede deshacer!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Sí, eliminar!",
            cancelButtonText: "¡No, cancelar!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location="<?php echo $URL ?>/controladores/tiposIdentificacionProgramas/controllerEliminarTipoIdentificacionPrograma.php?ide_pro_id="+ide_pro_id;
                swalWithBootstrapButtons.fire({
                    title: "¡Tipo de programa eliminado!",
                    text: "El tipo de programa seleccionado ha sido eliminado",
                    icon: "success"
                });
            } else if (
              // Read more about handling dismissals below
                result.dismiss === Swal.DismissReason.cancel
            ){
                swalWithBootstrapButtons.fire({
                    title: "Cancelado",
                    text: "El tipo de programa no sufrió cambios",
                    icon: "error"
                });
            }
        });
    }
</script>