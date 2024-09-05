<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/tiposIdentificacionInstituciones/controllerListarIdentificacionesInstituciones.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tipos de identificación de instituciones</h1>
                    <hr>
                    <div class="btn-group">
                        <button type="button" class="btn btn-block" data-toggle="modal" data-target="#modal-create" style="background-color:#2C3E50; color:#ffffff;">
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
                        <div class="card-header" style="background-color:#2C3E50; color:#ffffff;">
                            <h3 class="card-title">Identificaciones de instituciones</h3>
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
                                                foreach ($datos_cat_identificacion_instituciones as $dato_cat_identificacion_institucion) {
                                                    $ide_pk_id_institucion = $dato_cat_identificacion_institucion['ide_pk_id_institucion'];
                                                    $tip_codigo_institucion = $dato_cat_identificacion_institucion['tip_codigo_institucion'];
                                                    $des_tip_ins = $dato_cat_identificacion_institucion['des_tip_ins'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $contador = $contador+1?></td>
                                                        <td><?php echo $tip_codigo_institucion?></td>
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
                                                                                    <label for="tip_codigo_institucion<?php echo $contador?>">Nombre</label>
                                                                                    <input type="text" class="form-control" id="tip_codigo_institucion<?php echo $contador?>" value="<?php echo $tip_codigo_institucion?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="des_tip_ins<?php echo $contador?>">Descripción</label>
                                                                                    <textarea type="text" class="form-control" id="des_tip_ins" name="des_tip_ins" rows="5" disabled><?php echo $des_tip_ins?></textarea>
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
                                                                <!-- Modal de actualización de usuarios -->
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
                                                                                        <input type="hidden" id="ide_pk_id_institucion-<?php echo $contador?>" value="<?php echo $ide_pk_id_institucion ?>">
                                                                                        <input type="hidden" id="session_pk_id_usuario-<?php echo $contador?>" value="<?php echo $session_pk_id_usuario ?>">
                                                                                        <label for="identificacion_usuario-<?php echo $contador?>">Nombre</label>
                                                                                        <input type="text" class="form-control" id="tip_codigo_institucion-<?php echo $contador?>" value="<?php echo $tip_codigo_institucion?>" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="des_tip_ins-<?php echo $contador?>">Descripción</label>
                                                                                        <textarea type="text" class="form-control" id="des_tip_ins-<?php echo $contador?>" rows="5" required><?php echo $des_tip_ins?></textarea>
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
                                                                        var ide_pk_id_institucion = $('#ide_pk_id_institucion-<?php echo $contador?>').val();
                                                                        var tip_codigo_institucion = $('#tip_codigo_institucion-<?php echo $contador?>').val();
                                                                        var des_tip_ins = $('#des_tip_ins-<?php echo $contador?>').val();
                                                                        var session_pk_id_usuario = $('#session_pk_id_usuario-<?php echo $contador?>').val();

                                                                        var url = '../../controladores/tiposIdentificacionInstituciones/controllerActualizarTipoIdentificacionInstitucion.php';

                                                                        $.post(url, {ide_pk_id_institucion, tip_codigo_institucion, des_tip_ins, session_pk_id_usuario}, function (datos) {
                                                                            $('#respuesta_actualizar-<?php echo $contador?>').html(datos);
                                                                        });
                                                                    });
                                                                </script>
                                                                <div id="respuesta_actualizar-<?php echo $contador?>"></div>
                                                            </div>
                                                            <!-- Fin actualización de usuarios -->
                                                            <!-- Eliminación de tipos de identificación -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger" title="Eliminar" onClick="eliminar(<?php echo $ide_pk_id_institucion?>)"><i class="fa fa-trash-alt"></i></button>
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
            <div class="modal-header" style="background-color:#2C3E50; color:#ffffff;">
                <h4 class="modal-title">Nuevo tipo de identificación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <label for="tip_codigo_institucion">Nombre de la identificación</label>
                        <input type="text" class="form-control" id="tip_codigo_institucion" name="tip_codigo_institucion" placeholder="Ingrese el nombre de la identificación" required>
                    </div>
                    <div class="form-group">
                        <label for="des_tip_ins">Descripción</label>
                        <textarea type="text" class="form-control" id="des_tip_ins" name="des_tip_ins" placeholder="Ingrese una breve descripción del tipo de identificación"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pais">País</label>
                        <select class="form-control" id="pais" name="pais"></select>
                    </div>
                    <!--
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="estado"></select>
                    </div>
                    <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <select class="form-control" id="ciudad" name="ciudad"></select>
                    </div>
                    -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn" id="btn_registrar" style="background-color:#2C3E50; color:#ffffff;">Registrar</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--Script para el manejo de las acciones del modal-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var token = '';

        // Función para obtener el token de autorización
        function obtenerToken() {
            return $.ajax({
                url: "https://www.universal-tutorial.com/api/getaccesstoken",
                type: "GET",
                headers: {
                    "Accept": "application/json",
                    "api-token": "s6cIzwbF6o1ML2Mihl9f7Iz4Upma1V2Qv8IyAWkaeTNhCSr-x_8e0vuUrhzA_C4X-pg",
                    "user-email": "delgadojuanfidel@gmail.com"
                }
            }).done(function(data) {
                token = data.auth_token; // Guarda el token en la variable
            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.error("Error al obtener el token: ", textStatus, errorThrown);
            });
        }

        // Función para obtener los países
        function cargarPaises() {
            $.ajax({
                url: 'https://www.universal-tutorial.com/api/countries',
                headers: {
                    'Authorization': 'Bearer ' + token,
                    'Accept': 'application/json'
                },
                success: function(data) {
                    console.log(data);
                    $('#pais').empty();
                    $.each(data, function(index, pais) {
                        $('#pais').append('<option value="' + pais.country_code + '">' + pais.country_name + '</option>');
                    });
                },
                error: function(error) {
                    console.error('Error al cargar los países:', error);
                }
            });
        }
        /*
        // Función para obtener los estados
        function cargarEstados(paisCodigo) {
            $.ajax({
                url: 'https://www.universal-tutorial.com/api/states/' + paisCodigo,
                headers: {
                    'Authorization': 'Bearer ' + token,
                    'Accept': 'application/json'
                },
                success: function(data) {
                    $('#estado').empty();
                    $.each(data, function(index, estado) {
                        $('#estado').append('<option value="' + estado.state_code + '">' + estado.state_name + '</option>');
                    });
                },
                error: function(error) {
                    console.error('Error al cargar los estados:', error);
                }
            });
        }

        // Función para obtener las ciudades
        function cargarCiudades(estadoCodigo) {
            $.ajax({
                url: 'https://www.universal-tutorial.com/api/cities/' + estadoCodigo,
                headers: {
                    'Authorization': 'Bearer ' + token,
                    'Accept': 'application/json'
                },
                success: function(data) {
                    $('#ciudad').empty();
                    $.each(data, function(index, ciudad) {
                        $('#ciudad').append('<option value="' + ciudad.city_name + '">' + ciudad.city_name + '</option>');
                    });
                },
                error: function(error) {
                    console.error('Error al cargar las ciudades:', error);
                }
            });
        }*/

        // Obtener el token y cargar los países cuando el documento esté listo
        obtenerToken().done(function() {
            cargarPaises();

            // Manejador de evento para cuando se cambia el país seleccionado
            $('#pais').change(function() {
                var paisCodigo = $(this).val();
                cargarEstados(paisCodigo);
                $('#ciudad').empty();
            });

            // Manejador de evento para cuando se cambia el estado seleccionado
            $('#estado').change(function() {
                var estadoCodigo = $(this).val();
                cargarCiudades(estadoCodigo);
            });

            // Manejo de registro
            $("#btn_registrar").click(function () {
                var tip_codigo_institucion = $('#tip_codigo_institucion').val();
                var des_tip_ins = $('#des_tip_ins').val();
                var session_pk_id_usuario = $('#session_pk_id_usuario').val();
                var pais = $('#pais').val();
                var estado = $('#estado').val();
                var ciudad = $('#ciudad').val();

                var url = '../../controladores/tiposIdentificacionInstituciones/controllerCrearTipoIdentificacionInstitucion.php';
                $.post(url, {
                    tip_codigo_institucion,
                    des_tip_ins,
                    session_pk_id_usuario,
                    pais,
                    estado,
                    ciudad
                }, function (datos) {
                    $('#respuesta').html(datos);
                });

                // alert("Ingresó");
            });
        });
    });
</script>

<!--
<!--Modal de registro de nuevos tipos
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#2C3E50; color:#ffffff;">
                <h4 class="modal-title">Nuevo tipo de identificación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <label for="tip_codigo_institucion">Nombre de la identificación</label>
                        <input type="text" class="form-control" id="tip_codigo_institucion" name="tip_codigo_institucion" placeholder="Ingrese el nombre de la identificación" required>
                    </div>
                    <div class="form-group">
                        <label for="des_tip_ins">Descripción</label>
                        <textarea type="text" class="form-control" id="des_tip_ins" name="des_tip_ins" placeholder="Ingrese una breve descripción del tipo de identificación"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ubicacion">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" placeholder="Ingrese la dirección">

                        <input type="hidden" id="pais" name="pais">
                        <input type="hidden" id="estado" name="estado">
                        <input type="hidden" id="ciudad" name="ciudad">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn" id="btn_registrar" style="background-color:#2C3E50; color:#ffffff;">Registrar</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content
    </div>
    <!-- /.modal-dialog
</div>

<!--Script para el manejo de las acciones del modal
<script>
    $("#btn_registrar").click(function () {
        var tip_codigo_institucion = $('#tip_codigo_institucion').val();
        var des_tip_ins = $('#des_tip_ins').val();
        var session_pk_id_usuario = $('#session_pk_id_usuario').val();

        var url = '../../controladores/tiposIdentificacionInstituciones/controllerCrearTipoIdentificacionInstitucion.php';
        $.post(url, {tip_codigo_institucion, des_tip_ins, session_pk_id_usuario}, function (datos) {
            $('#respuesta').html(datos);
        })

       //alert ("Ingresó");
    });
</script>
<div id="respuesta"></div>
-->
<!--Script para el manejo de la tabla-->
<script>
    $(function () {
        $("#example1").DataTable({
            /* cambio de idiomas de datatable */
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Tipos de Instituciones",
                "infoEmpty": "Mostrando 0 to 0 of 0 Tipos de Instituciones",
                "infoFiltered": "(Filtrado de _MAX_ total Tipos de Instituciones)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Tipos de Instituciones",
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
    function eliminar(ide_pk_id_institucion){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: true
        });
        swalWithBootstrapButtons.fire({
            title: "¿Realmente desea eliminar este tipo de institución?",
            text: "¡Esta acción no se puede deshacer!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Sí, eliminar!",
            cancelButtonText: "¡No, cancelar!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location="<?php echo $URL ?>/controladores/tiposIdentificacionInstituciones/controllerEliminarTipoIdentificacionInstitucion.php?ide_pk_id_institucion="+ide_pk_id_institucion;
                swalWithBootstrapButtons.fire({
                    title: "¡Tipo de institución eliminado!",
                    text: "El tipo de institución seleccionado ha sido eliminado",
                    icon: "success"
                });
            } else if (
              // Read more about handling dismissals below
                result.dismiss === Swal.DismissReason.cancel
            ){
                swalWithBootstrapButtons.fire({
                    title: "Cancelado",
                    text: "El tipo de institución no sufrió cambios",
                    icon: "error"
                });
            }
        });
    }
</script>