<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/roles/controllerListaRoles.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de roles</h1>
                    <hr>
                    <div class="btn-group">
                        <button type="button" class="btn btn-block" data-toggle="modal" data-target="#modal-create" style="background-color:#2C3E50; color:#ffffff;">
                            <i class="fas fa-user-plus"></i> Nuevo Rol
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
                <div class="col-sm-10">
                    <div class="card card-primary">
                        <div class="card-header" style="background-color:#2C3E50; color:#ffffff;">
                            <h3 class="card-title">Roles registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive p-0">
                                        <table id="tb_roles" class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th><center>#</center></th>
                                                    <th><center>Rol</center></th>
                                                    <th><center>Descripción</center></th>
                                                    <th><center>Acciones</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador=0;
                                                foreach ($datos_roles as $dato_rol) {
                                                    $pk_id_rol = $dato_rol['pk_id_rol'];
                                                    $nombre_rol = $dato_rol['nombre_rol'];
                                                    $descripcion_rol = $dato_rol['descripcion_rol'];
                                                ?>
                                                    <tr>
                                                        <td><center><?php echo $contador = $contador+1?></center></td>
                                                        <td><center><?php echo $dato_rol['nombre_rol']?></center></td>
                                                        <td><center><?php echo $dato_rol['descripcion_rol']?></center></td>
                                                        <td>
                                                            <!-- Actualización de roles -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn" data-toggle="modal" data-target="#modal-update-<?php echo $contador?>" title="Actualizar" style="background-color:#3498DB;"><i class="fa fa-pencil-alt"></i>
                                                                </button>

                                                                <div class="modal fade" id="modal-update-<?php echo $contador?>">
                                                                <!-- Modal de actualización de usuarios -->
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header" style="background-color:#3498DB; color:#ffffff;">
                                                                                <h4 class="modal-title">Actualizar rol</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="card-body">
                                                                                    <div class="form-group">
                                                                                        <input type="hidden" id="pk_id_rol-<?php echo $contador?>" value="<?php echo $pk_id_rol ?>">
                                                                                        <label for="nombre_rol-<?php echo $contador?>">Nombre</label>
                                                                                        <input type="text" class="form-control" id="nombre_rol-<?php echo $contador?>" value="<?php echo $nombre_rol?>" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="descripcion_rol-<?php echo $contador?>">Descripción</label>
                                                                                        <input type="text" class="form-control" id="descripcion_rol-<?php echo $contador?>" value="<?php echo $descripcion_rol?>" rows="5" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-between">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                                                                                <button type="submit" class="btn" id="btn_actualizar-<?php echo $contador?>" style="background-color:#3498DB; color:#ffffff;">Actualizar</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                                <!--Script para el manejo de las acciones del modal de actualización de roles-->
                                                                <script>
                                                                    $("#btn_actualizar-<?php echo $contador?>").click(function () {
                                                                        var pk_id_rol = $('#pk_id_rol-<?php echo $contador?>').val();
                                                                        var nombre_rol = $('#nombre_rol-<?php echo $contador?>').val();
                                                                        var descripcion_rol = $('#descripcion_rol-<?php echo $contador?>').val();
                                                                        var url = '../../controladores/roles/controllerModalActualizarRol.php';

                                                                        $.post(url, {pk_id_rol, nombre_rol, descripcion_rol}, function (datos) {
                                                                            $('#respuesta_actualizar-<?php echo $contador?>').html(datos);
                                                                        });
                                                                    });
                                                                </script>
                                                                <div id="respuesta_actualizar-<?php echo $contador?>"></div>
                                                            </div>
                                                            <!-- Fin actualización de usuarios -->
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

<!--Modal de creación de roles-->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#2C3E50; color:#ffffff;">
                <h4 class="modal-title">Nuevo rol</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#ffffff;>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de creación de roles -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre_rol">Nombre</label>
                        <input type="text" class="form-control" id="nombre_rol" name="nombre_rol" placeholder="Ingrese el nombre del rol" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion_rol">Descripción</label>
                        <textarea type="text" class="form-control" id="descripcion_rol" name="descripcion_rol" rows="5" placeholder="Ingrese una descripción del rol" required> </textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn" id="btn_registrar" style="background-color:#2C3E50; color:#ffffff;">Registrar</button>
            </div>
            <div id="respuesta"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--Script para el manejo de las acciones del modal de registro de usuarios-->
<script>
    $("#btn_registrar").click(function () {
        var nombre_rol = $('#nombre_rol').val();
        var descripcion_rol = $('#descripcion_rol').val();

        var url = '../../controladores/roles/controllerModalCrearRol.php';
        $.post(url, {nombre_rol, descripcion_rol}, function (datos) {
            $('#respuesta').html(datos);
        })
    });
</script>
<!--<div id="respuesta"></div>-->

<!--Script para el manejo de la tabla-->
<script>
            $(function () {
                $("#tb_roles").DataTable({
                    /* Cambio de idiomas de datatable */
                    "pageLength": 5,
                    "language": {
                        "emptyTable": "No hay información",
                        "decimal": "",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Roles",
                        "infoEmpty": "Mostrando 0 to 0 of 0 Usuarios",
                        "infoFiltered": "(Filtrado de _MAX_ total Roles)",
                        "infoPostFix": "",
                        "thousands": ",",
                        "lengthMenu": "Mostrar _MENU_ Roles",
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