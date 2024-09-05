<?PHP

include '../../../configuracion.php';
include '../../../layout/session.php';
include '../../../layout/layout1.php';
include '../../../controladores/instituciones/sedesInstituciones/controllerListarSedesInstituciones.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Sedes de la institución <?php echo $nombre_institucion ?></h1>
                    <hr>
                    <div class="btn-group">
                        <button type="button" class="btn btn-block" data-toggle="modal" data-target="#modal-create" style="background-color:#2C3E50; color:#ffffff;">
                            <i class="fas fa-building"></i> Nueva sede
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
                            <h3 class="card-title">Sedes</h3>
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
                                                    <th><center>Programas</center></th>
                                                    <th><center>Asignaturas</center></th>
                                                    <th><center>Acciones</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador=0;
                                                foreach ($datos_sedes as $dato_sede) {
                                                    $pk_id_sede = $dato_sede['pk_id_sede'];
                                                    $nombre_sede = $dato_sede['nombre_sede'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $contador = $contador+1?></td>
                                                        <td><?php echo $nombre_sede?></td>
                                                        <td>
                                                            <center>
                                                            <div class="btn-group">
                                                                <a href="../programas/index.php?pk_id_institucion=<?php echo $pk_id_institucion?>" type="button" class="btn btn-block bg-gradient-secondary" title="Ver Programas"><i class="fa fa-graduation-cap"></i> Ver programas</a>
                                                            </div>
                                                            </center>
                                                        </td>
                                                        <td>
                                                        <center>
                                                            <div class="btn-group">
                                                                <a href="../asignaturas/index.php?pk_id_institucion=<?php echo $pk_id_sede_institucion?>" type="button" class="btn btn-info" title="Ver Asignaturas"><i class="fa fa-book"></i> Ver Asignaturas</a>
                                                            </div>
                                                            </center>
                                                        </td>
                                                        <td><center>
                                                            <div class="btn-group">
                                                                <a href="verInstitucion.php?pk_id_institucion=<?php echo $pk_id_institucion?>" type="button" class="btn btn-info" title="Ver" title="Ver"><i class="fa fa-eye"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a href="actualizarInstitucion.php?pk_id_institucion=<?php echo $pk_id_institucion?> "type="button" class="btn btn-warning" title="Actualizar"><i class="fa fa-pencil-alt"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger" title="Eliminar" onClick="eliminar(<?php echo $pk_id_institucion?>)"><i class="fa fa-trash-alt"></i></button>
                                                            </div>
                                                            </center>
                                                        </td>
                                                        <td>
                                                            <center>
                                                            <div class="btn-group">
                                                                <a href="../asignaturas/index.php?pk_id_institucion=<?php echo $pk_id_institucion?>&nombre_institucion=<?php echo $nombre_institucion?>" type="button" class="btn" title="Ver Asignaturas" style="background-color: #2C3E50; color:#ffffff;"><i class="fa fa-book"></i> Ver sedes</a>
                                                            </div>
                                                            </center>
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
include '../../../layout/mensajes.php';
include '../../../layout/layout2.php';
?>

<!--Modal de registro de sede de la institución-->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content"  style="background-color:#d9d9d9;">
            <div class="modal-header" style="background-color:#2C3E50; color:#ffffff;">
                <h4 class="modal-title">Nueva sede</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#ffffff;>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de registro de sedes de la institución -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre_sede">Nombre</label>
                        <input type="text" class="form-control" id="nombre_sede" name="nombre_sede" placeholder="Ingrese el nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion_sede">Dirección</label>
                        <input type="text" class="form-control" id="direccion_sede" name="direccion_sede" placeholder="Ingrese el número de identificación" required>
                    </div>
                    <div class="form-group">
                            <label for="fk_id_pais">País</label>
                            <select class="form-control" id="fk_id_pais" name="fk_id_pais" onchange="cargarEstados()">
                                <!-- Las opciones se llenarán dinámicamente mediante JavaScript -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fk_id_estado">Estado</label>
                            <select class="form-control" id="fk_id_estado" name="fk_id_estado" onchange="cargarCiudades()" disabled>
                                <!-- Este contenido se llenará dinámicamente mediante JavaScript -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fk_id_ciudad">Ciudad</label>
                            <select class="form-control" id="fk_id_ciudad" name="fk_id_ciudad" disabled>
                                <!-- Este contenido se llenará dinámicamente mediante JavaScript -->
                            </select>
                        </div>
                    <div class="form-group">
                        <label for="acreditacion_alta_calidad">La sede cuenta con acreditación en alta calidad</label>
                        <select class="form-control" id="acreditacion_alta_calidad" name="acreditacion_alta_calidad" required>
                            <option value="Oficial" selected>Seleccione el estado</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha_acreditacion">Fecha de la acreditación</label>
                        <input type="date" class="form-control" id="fecha_acreditacion" name="fecha_acreditacion"  required>
                    </div>
                    <div class="form-group">
                        <label for="resolucion_acreditacion">Resolución</label>
                        <input type="text" class="form-control" id="resolucion_acreditacion" name="resolucion_acreditacion" placeholder="Ingrese la resolución de acreditación" required>
                    </div>
                    <div class="form-group">
                        <label for="vigencia_acreditacion">Tiempo de vigencia de la acreditación</label>
                        <input type="text" class="form-control" id="vigencia_acreditacion" name="vigencia_acreditacion" placeholder="Ingrese tiempo de vigencia de la acreditación" required>
                    </div>
                    <div class="form-group">
                        <label for="codigo_institucion">Código de la institucion</label>
                        <input type="text" class="form-control" id="codigo_institucion" name="codigo_institucion" placeholder="Ingrese el telefono secundario" required>
                    </div>
                    <div class="form-group">
                        <label for="fk_id_identificacion">Tipo de identificación de la sede</label>
                        <select class="form-control" id="fk_id_identificacion" name="fk_id_identificacion" required>
                            <option value="Oficial" selected>Seleccione el tipo de identificación</option>
                            <option value="1">SNIES</option>
                            <option value="2">Otro</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" id="fk_id_institucion" name="fk_id_institucion" value="<?php echo $fk_id_institucion ?>">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn" id="btn_registrar" style="background-color:#2C3E50; color:#ffffff;">Registrar</button>
            </div>
            <div id="respuesta"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--Función para carga de países, estados y ciudades desde BD-->
<script>
    // Función para cargar los países desde la base de datos
    function cargarPaises() {
        console.log("Países");
        // Hacer una solicitud AJAX para obtener la lista de países
        $.ajax({
            url: `../../../controladores/paises/controllerObtenerPaises.php`,
            method: 'GET',
            success: function(data) {
            // Se llena el select de países con los datos obtenidos
            $("#fk_id_pais").html(data);
            },
            error: function(xhr, status, error) {
            // Error: manejar el error de la solicitud
            console.log("Error en la solicitud AJAX");
            }
        });
    }

    // Función para cargar estados basados en el país seleccionado
    function cargarEstados() {
        const fk_id_pais = $("#fk_id_pais").val();
        console.log(fk_id_pais);

        // Hacer una solicitud AJAX para obtener la lista de estados del país seleccionado
        $.ajax({
            url: `../../../controladores/estados/controllerObtenerEstados.php?fk_id_pais=${fk_id_pais}`,
            method: 'GET',
            success: function(data) {
            // Llenar el select de estados con los datos obtenidos
            $("#fk_id_estado").html(data);
            // Habilitar el select de estados
            $("#fk_id_estado").prop('disabled', false);
            }
        });
    }

    // Función para cargar ciudades basadas en el estado seleccionado
    function cargarCiudades() {
        const fk_codigo_estado = $("#fk_id_estado").val();
        console.log("Ciudades");
        console.log(fk_id_estado);

        // Hacer una solicitud AJAX para obtener la lista de ciudades del estado seleccionado
        $.ajax({
            url: `../../../controladores/ciudades/controllerObtenerCiudades.php?fk_codigo_estado=${fk_codigo_estado}`,
            method: 'GET',
            success: function(data) {
            // Llenar el select de ciudades con los datos obtenidos
            $("#fk_id_ciudad").html(data);
            // Habilitar el select de ciudades
            $("#fk_id_ciudad").prop('disabled', false);
            }
        });
    }

    // Llamar a la función al cargar la página
    $(document).ready(function() {
    cargarPaises();
    });
</script>

<!--Script para el manejo de las acciones del modal de registro de sedes-->
<script>
    $("#btn_registrar").click(function () {
        var nombre_sede = $('#nombre_sede').val();
        var direccion_sede = $('#direccion_sede').val();
        var fk_id_institucion = $('#fk_id_institucion').val();
        var fk_id_ciudad = $('#fk_id_ciudad').val();
        var fk_id_estado = $('#fk_id_estado').val();
        var fk_id_pais = $('#fk_id_pais').val();
        var acreditacion_alta_calidad = $('#acreditacion_alta_calidad').val();
        var fecha_acreditacion = $('#fecha_acreditacion').val();
        var resolucion_acreditacion = $('#resolucion_acreditacion').val();
        var vigencia_acreditacion = $('#vigencia_acreditacion').val();
        var codigo_institucion = $('#codigo_institucion').val();
        var fk_id_identificacion = $('#fk_id_identificacion').val();

        var url = '../../../controladores/instituciones/sedesInstituciones/controllerModalCrearSedeInstitucion.php';
        $.post(url, {nombre_sede, direccion_sede, fk_id_institucion, fk_id_ciudad, fk_id_estado, fk_id_pais, acreditacion_alta_calidad, fecha_acreditacion, resolucion_acreditacion, vigencia_acreditacion, codigo_institucion, fk_id_identificacion}, function (datos) {
            $('#respuesta').html(datos);
        })
    });
</script>
<!--<div id="respuesta"></div>-->

<script>
    $(function () {
        $("#example1").DataTable({
            /* cambio de idiomas de datatable */
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ sedes",
                "infoEmpty": "Mostrando 0 to 0 of 0 sedes",
                "infoFiltered": "(Filtrado de _MAX_ total Sedes)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Sedes",
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
    function eliminar(pk_id_institucion){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: true
        });
        swalWithBootstrapButtons.fire({
            title: "¿Realmente desea eliminar esta sede?",
            text: "¡Esta acción no se puede deshacer!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Sí, eliminar!",
            cancelButtonText: "¡No, cancelar!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location="<?php echo $URL ?>/controladores/instituciones/sedesInstituciones/controllerEliminarSede.php?pk_id_sede:institucion="+pk_id_sede_institucion;
                swalWithBootstrapButtons.fire({
                    title: "Sede eliminada!",
                    text: "La sede seleccionada ha sido eliminada",
                    icon: "success"
                });
            } else if (
              // Read more about handling dismissals below
                result.dismiss === Swal.DismissReason.cancel
            ){
                swalWithBootstrapButtons.fire({
                    title: "Cancelado",
                    text: "La institución no sufrió cambios",
                    icon: "error"
                });
            }
        });
    }
</script>