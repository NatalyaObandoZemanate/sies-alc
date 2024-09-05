<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/usuarios/controllerListaUsuarios.php';
include '../../controladores/roles/controllerListaRoles.php';
include '../../controladores/instituciones/controllerListaInstituciones.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de usuarios</h1>
                    <hr>
                    <div class="btn-group">
                        <button type="button" class="btn btn-block" data-toggle="modal" data-target="#modal-create" style="background-color:#2C3E50; color:#ffffff;">
                            <i class="fas fa-user-plus"></i> Nuevo Usuario
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
                    <div class="card card-secondary">
                        <div class="card-header" style="background-color:#2C3E50; color:#ffffff;">
                            <h3 class="card-title">Usuarios registrados</h3>
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
                                                    <center>
                                                    <th><center>#</center></th>
                                                    <th><center>Nombre</center></th>
                                                    <th><center>Rol</center></th>
                                                    <th><center>Email</center></th>
                                                    <th><center>Acciones</center></th>
                                                    </center>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador=0;
                                                foreach ($datos_usuarios as $dato_usuario) {
                                                    $pk_id_usuario = $dato_usuario['pk_id_usuario'];
                                                    $identificacion_usuario = $dato_usuario['identificacion_usuario'];
                                                    $nombre_usuario = $dato_usuario['nombre_usuario'];
                                                    $nombre_rol = $dato_usuario['nombre_rol'];
                                                    $telefono_usuario = $dato_usuario['telefono_usuario'];
                                                    $email_usuario = $dato_usuario['email_usuario'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $contador = $contador+1?></td>
                                                        <td><?php echo $nombre_usuario?></td>
                                                        <td><?php echo $nombre_rol?></td>
                                                        <td><?php echo $email_usuario?></td>
                                                        <td>
                                                            <!-- Visualización de usuarios -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn" data-toggle="modal" data-target="#modal-view-<?php echo $contador?>" title="Ver" style="border: 0.3px solid black"><i class="fas fa-eye"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal fade" id="modal-view-<?php echo $contador?>">
                                                                <!-- Modal de visualización de usuarios -->
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg-info">
                                                                            <h4 class="modal-title">Ver usuario</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <input type="hidden" id="pk_id_usuario<?php echo $contador?>" value="<?php echo $pk_id_usuario ?>">
                                                                                    <input type="hidden" id="session_pk_id_usuario<?php echo $contador?>" value="<?php echo $session_pk_id_usuario ?>">
                                                                                    <label for="identificacion_usuario<?php echo $contador?>">Identificación</label>
                                                                                    <input type="text" class="form-control" id="identificacion_usuario<?php echo $contador?>" value="<?php echo $identificacion_usuario?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="nombre_usuario<?php echo $contador?>">Nombre</label>
                                                                                    <input type="text" class="form-control" id="nombre_usuario<?php echo $contador?>" value="<?php echo $nombre_usuario?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="fk_id_rol<?php echo $contador?>">Rol del usuario</label>
                                                                                    <select class="form-control" id="fk_id_rol<?php echo $contador?>" disabled>
                                                                                        <?php
                                                                                        foreach ($datos_roles as $dato_rol) {
                                                                                            $nombre_rol = $dato_rol['nombre_rol'];
                                                                                            $pk_id_rol = $dato_rol['pk_id_rol'];
                                                                                        ?>
                                                                                        <option value="<?php echo $pk_id_rol?>" <?php if ($nombre_rol == $nombre_rol){?>
                                                                                                selected="selected"<?php }?>>
                                                                                                <?php echo $nombre_rol?></option>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="telefono_usuario<?php echo $contador?>">Teléfono</label>
                                                                                    <input type="text" class="form-control" id="telefono_usuario<?php echo $contador?>" value="<?php echo $telefono_usuario?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="email_usuario<?php echo $contador?>">Email</label>
                                                                                    <input type="email" class="form-control" id="email_usuario<?php echo $contador?>" value="<?php echo $email_usuario?>" disabled>
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
                                                            <!-- Fin visualización de usuarios -->
                                                            <!-- Actualización de usuarios -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn" data-toggle="modal" data-target="#modal-update-<?php echo $contador?>" title="Actualizar" style="background-color:#3498DB;"><i class="fa fa-pencil-alt"></i>
                                                                </button>

                                                                <div class="modal fade" id="modal-update-<?php echo $contador?>">
                                                                <!-- Modal de actualización de usuarios -->
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header" style="background-color:#3498DB; color:#ffffff;">
                                                                                <h4 class="modal-title">Actualizar usuario</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="card-body">
                                                                                    <div class="form-group">
                                                                                        <input type="hidden" id="pk_id_usuario-<?php echo $contador?>" value="<?php echo $pk_id_usuario ?>">
                                                                                        <input type="hidden" id="session_pk_id_usuario-<?php echo $contador?>" value="<?php echo $session_pk_id_usuario ?>">
                                                                                        <label for="identificacion_usuario-<?php echo $contador?>">Identificación</label>
                                                                                        <input type="text" class="form-control" id="identificacion_usuario-<?php echo $contador?>" value="<?php echo $identificacion_usuario?>" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="nombre_usuario-<?php echo $contador?>">Nombre</label>
                                                                                        <input type="text" class="form-control" id="nombre_usuario-<?php echo $contador?>" value="<?php echo $nombre_usuario?>" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="fk_id_rol-<?php echo $contador?>">Rol del usuario</label>
                                                                                        <select class="form-control" id="fk_id_rol-<?php echo $contador?>" required>
                                                                                            <?php
                                                                                            foreach ($datos_roles as $dato_rol) {
                                                                                                $nombre_rol = $dato_rol['nombre_rol'];
                                                                                                $pk_id_rol = $dato_rol['pk_id_rol'];
                                                                                            ?>
                                                                                            <option value="<?php echo $pk_id_rol?>" <?php if ($nombre_rol == $nombre_rol){?>
                                                                                                    selected="selected"<?php }?>>
                                                                                                    <?php echo $nombre_rol?></option>
                                                                                            <?php
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="telefono_usuario-<?php echo $contador?>">Teléfono</label>
                                                                                        <input type="text" class="form-control" id="telefono_usuario-<?php echo $contador?>" value="<?php echo $telefono_usuario?>" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="email_usuario-<?php echo $contador?>">Email</label>
                                                                                        <input type="email" class="form-control" id="email_usuario-<?php echo $contador?>" value="<?php echo $email_usuario?>" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-between">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                                                                                <button type="submit" class="btn btn-warning" id="btn_actualizar-<?php echo $contador?>" style="background-color:#3498DB; color:#ffffff; border-color:#3498DB">Actualizar</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                                <!--Script para el manejo de las acciones del modal de actualización de usuarios-->
                                                                <script>
                                                                    $("#btn_actualizar-<?php echo $contador?>").click(function () {
                                                                        var pk_id_usuario = $('#pk_id_usuario-<?php echo $contador?>').val();
                                                                        var identificacion_usuario = $('#identificacion_usuario-<?php echo $contador?>').val();
                                                                        var nombre_usuario = $('#nombre_usuario-<?php echo $contador?>').val();
                                                                        var fk_id_rol = $('#fk_id_rol-<?php echo $contador?>').val();
                                                                        var telefono_usuario = $('#telefono_usuario-<?php echo $contador?>').val();
                                                                        var email_usuario = $('#email_usuario-<?php echo $contador?>').val();
                                                                        var session_pk_id_usuario = $('#session_pk_id_usuario-<?php echo $contador?>').val();

                                                                        var url = '../../controladores/usuarios/controllerModalActualizarUsuario.php';

                                                                        $.post(url, {pk_id_usuario, identificacion_usuario, nombre_usuario, fk_id_rol, telefono_usuario, email_usuario, session_pk_id_usuario}, function (datos) {
                                                                            $('#respuesta_actualizar-<?php echo $contador?>').html(datos);
                                                                        });
                                                                    });
                                                                </script>
                                                                <div id="respuesta_actualizar-<?php echo $contador?>"></div>
                                                            </div>
                                                            <!-- Fin actualización de usuarios -->
                                                            <!-- Eliminación de usuarios -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger" title="Eliminar" onClick="eliminar(<?php echo $pk_id_usuario?>)"><i class="fa fa-trash-alt"></i></button>
                                                            </div>
                                                            <!-- Fin eliminación de usuarios -->
                                                            <!-- Asignación de instituciones -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-block bg-gradient-secondary" data-toggle="modal" data-target="#modal-instituciones-<?php echo $contador?>" title="Actualizar"><i class="fas fa-building"></i> Asignar institución
                                                                </button>
                                                            </div>
                                                            <div class="modal fade" id="modal-instituciones-<?php echo $contador?>">
                                                            <!-- Modal de asignación de instituciones -->
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg-secondary">
                                                                            <h4 class="modal-title">Asignar institución</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <input type="hidden" id="fk_pk_id_usuario-<?php echo $contador?>" value="<?php echo $pk_id_usuario ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="nombre_usuario-<?php echo $contador?>">Usuario</label>
                                                                                    <input type="text" class="form-control" id="nombre_usuario-<?php echo $contador?>" value="<?php echo $nombre_usuario?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <!-- Combobox para la selección de la institución -->
                                                                                    <label for="fk_pk_id_institucion">Institución</label>
                                                                                    <select text class="form-control" id="fk_pk_id_institucion" name="fk_pk_id_institucion" required>
                                                                                        <?php
                                                                                        foreach ($datos_instituciones as $dato_institucion) {
                                                                                        ?>
                                                                                        <option value="<?php echo $dato_institucion['pk_id_institucion']?>"><?php echo $dato_institucion['nombre_institucion']?></option>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-between">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
                                                                            <button type="submit" class="btn btn-secondary" id="btn_asignar-<?php echo $contador?>">Asignar</button>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.modal-content -->
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div>
                                                            <!--Script para el manejo de las acciones del modal de asignación de instituciones-->
                                                            <script>
                                                                $("#btn_asignar-<?php echo $contador?>").click(function () {
                                                                    var fk_pk_id_usuario = $('#fk_pk_id_usuario-<?php echo $contador?>').val();
                                                                    var fk_pk_id_institucion = $('#fk_pk_id_institucion').val();

                                                                    var url = '../../controladores/usuarios/controllerModalAsignarInstitucion.php';

                                                                    $.post(url, {fk_pk_id_usuario, fk_pk_id_institucion}, function (datos) {
                                                                        $('#respuesta_asignar-<?php echo $contador?>').html(datos);
                                                                    });
                                                                });
                                                            </script>
                                                            <div id="respuesta_asignar-<?php echo $contador?>"></div>
                                                            <!-- Fin asignación de instituciones -->
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

<!--Modal de registro de usuarios-->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#2C3E50; color:#ffffff;">
                <h4 class="modal-title">Nuevo usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#ffffff;>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de registro de usuarios -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre_usuario">Nombre</label>
                        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Ingrese el nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="identificacion_usuario">Identificación</label>
                        <input type="text" class="form-control" id="identificacion_usuario" name="identificacion_usuario" placeholder="Ingrese el número de identificación" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono_usuario">Teléfono</label>
                        <input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario" placeholder="Ingrese el teléfono" required>
                    </div>
                    <div class="form-group">
                        <label for="email_usuario">Email</label>
                        <input type="email" class="form-control" id="email_usuario" name="email_usuario" placeholder="Ingrese el email" required>
                        <input type="hidden" id="session_pk_id_usuario" name="session_pk_id_usuario" value="<?php echo $session_pk_id_usuario?>">
                    </div>
                    <div class="form-group">
                        <!-- Combobox para la selección del rol del usuario -->
                        <label for="fk_id_rol">Rol del usuario</label>
                        <select text class="form-control" id="fk_id_rol" name="fk_id_rol" required>
                            <?php
                            foreach ($datos_roles as $dato_rol) {
                            ?>
                            <option value="<?php echo $dato_rol['pk_id_rol']?>"><?php echo $dato_rol['nombre_rol']?></option>
                            <?php
                            }
                            ?>
                        </select>
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
        var nombre_usuario = $('#nombre_usuario').val();
        var identificacion_usuario = $('#identificacion_usuario').val();
        var telefono_usuario = $('#telefono_usuario').val();
        var email_usuario = $('#email_usuario').val();
        var fk_id_rol = $('#fk_id_rol').val();
        var session_pk_id_usuario = $('#session_pk_id_usuario').val();

        var url = '../../controladores/usuarios/controllerModalCrearUsuario.php';
        $.post(url, {nombre_usuario, identificacion_usuario, telefono_usuario, email_usuario, fk_id_rol, session_pk_id_usuario}, function (datos) {
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "Mostrando 0 to 0 of 0 Usuarios",
                "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Usuarios",
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

<!--Script para eliminar el registro-->
<script>
    function eliminar(pk_id_usuario){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: true
        });
        swalWithBootstrapButtons.fire({
            title: "¿Realmente desea eliminar este usuario?",
            text: "¡Esta acción no se puede deshacer!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Sí, eliminar!",
            cancelButtonText: "¡No, cancelar!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location="<?php echo $URL ?>/controladores/usuarios/controllerEliminarUsuario.php?pk_id_usuario="+pk_id_usuario;
                swalWithBootstrapButtons.fire({
                    title: "¡Usuario eliminado!",
                    text: "El usuario seleccionado ha sido eliminado",
                    icon: "success"
                });
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ){
                swalWithBootstrapButtons.fire({
                    title: "Cancelado",
                    text: "El usuario no sufrió cambios",
                    icon: "error"
                });
            }
        });
    }
</script>