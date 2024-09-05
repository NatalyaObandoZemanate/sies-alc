<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/instituciones/controllerListaInstituciones.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de instituciones</h1>
                    <hr>
                    <div class="btn-group">
                        <button type="button" class="btn btn-block" data-toggle="modal" data-target="#modal-create" style="background-color:#2C3E50; color:#ffffff;">
                            <i class="fas fa-building"></i> Nueva institución
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
                            <h3 class="card-title">Instituciones</h3>
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
                                                    <th><center>Sedes</center></th>
                                                    <th><center>Acciones</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador=0;
                                                foreach ($datos_instituciones as $dato_institucion) {
                                                    $pk_id_institucion = $dato_institucion['pk_id_institucion'];
                                                    $nombre_institucion = $dato_institucion['nombre_institucion'];
                                                    $nit_institucion = $dato_institucion['nit_institucion'];
                                                    $sector_institucion = $dato_institucion['sector_institucion'];
                                                    $caracter_academico = $dato_institucion['caracter_academico'];
                                                    $email_principal = $dato_institucion['email_principal'];
                                                    $email_secundario = $dato_institucion['email_secundario'];
                                                    $telefono_principal = $dato_institucion['telefono_principal'];
                                                    $telefono_secundario = $dato_institucion['telefono_secundario'];
                                                    $sitio_web_institucion = $dato_institucion['sitio_web_institucion'];
                                                    $fk_id_unidadAcademica = $dato_institucion['fk_id_unidadAcademica'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $contador = $contador+1?></td>
                                                        <td><?php echo $nombre_institucion?></td>
                                                        <td>
                                                            <center>
                                                            <div class="btn-group">
                                                                <a href="../instituciones/sedeInstitucion/index.php?pk_id_institucion=<?php echo $pk_id_institucion?>&nombre_institucion=<?php echo $nombre_institucion?>" type="button" class="btn" title="Ver Sedes" style="background-color: #2C3E50; color:#ffffff;"><i class="fa fa-book"> </i> Ver sedes</a>
                                                            </div>
                                                            </center>
                                                        </td>
                                                        <td>
                                                            <!-- Visualización de instituciones -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn" data-toggle="modal" data-target="#modal-view-<?php echo $contador?>" title="Ver" style="border: 0.3px solid black"><i class="fas fa-eye"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal fade" id="modal-view-<?php echo $contador?>">
                                                                <!-- Modal de visualización de instituciones -->
                                                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                                    <div class="modal-content"  style="background-color:#d9d9d9;">
                                                                        <div class="modal-header" style="background-color:#FFFFFF; color:#000000;">
                                                                            <h4 class="modal-title">Datos de <?php echo $nombre_institucion?></h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <!-- Formulario de visualización de instituciones -->
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <input type="hidden" id="pk_id_institucion-<?php echo $contador?>" value="<?php echo $pk_id_institucion ?>">
                                                                                    <input type="hidden" id="session_pk_id_usuario-<?php echo $contador?>" value="<?php echo $session_pk_id_usuario ?>">
                                                                                    <label for="nombre_institucion-<?php echo $contador?>">Nombre</label>
                                                                                    <input type="text" class="form-control" id="nombre_institucion-<?php echo $contador?>" value="<?php echo $nombre_institucion ?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="nit_institucion-<?php echo $contador?>">NIT</label>
                                                                                    <input type="text" class="form-control" id="nit_institucion-<?php echo $contador?>" value="<?php echo $nit_institucion ?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="sector_institucion-<?php echo $contador?>">Sector</label>
                                                                                    <input type="text" class="form-control" id="sector_institucion-<?php echo $contador?>" value="<?php echo $sector_institucion ?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="caracter_academico-<?php echo $contador?>">Carácter académico</label>
                                                                                    <input type="text" class="form-control" id="caracter_academico-<?php echo $contador?>" value="<?php echo $caracter_academico ?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="email_principal-<?php echo $contador?>">Email principal</label>
                                                                                    <input type="text" class="form-control" id="email_principal-<?php echo $contador?>" value="<?php echo $email_principal ?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="email_secundario-<?php echo $contador?>">Email secundario</label>
                                                                                    <input type="text" class="form-control" id="email_secundario-<?php echo $contador?>" value="<?php echo $email_secundario ?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="telefono_principal-<?php echo $contador?>">Teléfono principal</label>
                                                                                    <input type="text" class="form-control" id="telefono_principal-<?php echo $contador?>" value="<?php echo $telefono_principal ?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="telefono_secundario-<?php echo $contador?>">Teléfono secundario</label>
                                                                                    <input type="text" class="form-control" id="telefono_secundario-<?php echo $contador?>" value="<?php echo $telefono_secundario ?>" disabled>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="sitio_web_institucion-<?php echo $contador?>">Sitio Web de la institución</label>
                                                                                    <input type="text" class="form-control" id="sitio_web_institucion-<?php echo $contador?>" value="<?php echo $sitio_web_institucion ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-between">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.modal-content -->
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- Fin visualización de instituciones -->
                                                            <!-- Actualización de instituciones -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn" data-toggle="modal" data-target="#modal-update-<?php echo $contador?>" title="Actualizar" style="background-color:#3498DB;"><i class="fa fa-pencil-alt"></i>
                                                                </button>
                                                                <!-- Modal de actualización de instituciones -->
                                                                <div class="modal fade" id="modal-update-<?php echo $contador?>">
                                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                                        <div class="modal-content"  style="background-color:#d9d9d9;">
                                                                            <div class="modal-header" style="background-color:#3498DB; color:#ffffff;">
                                                                                <h4 class="modal-title">Actualizar datos de <?php echo $nombre_institucion?></h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#ffffff;>
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="card-body">
                                                                                    <div class="form-group">
                                                                                        <input type="hidden" id="pk_id_institucion-<?php echo $contador?>" value="<?php echo $pk_id_institucion ?>">
                                                                                        <label for="nombre_institucion-<?php echo $contador?>">Nombre</label>
                                                                                        <input type="text" class="form-control" id="nombre_institucion-<?php echo $contador?>" value="<?php echo $nombre_institucion?>"required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="nit_institucion-<?php echo $contador?>">NIT</label>
                                                                                        <input type="text" class="form-control" id="nit_institucion-<?php echo $contador?>" value="<?php echo $nit_institucion?>"required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="sector_institucion-<?php echo $contador?>">Sector</label>
                                                                                        <select class="form-control" id="sector_institucion-<?php echo $contador?>" name="sector_institucion" required>
                                                                                            <option value="<?php echo $sector_institucion?>" selected>Seleccione el sector</option>
                                                                                            <option value="Oficial">Oficial</option>
                                                                                            <option value="Privado">Privado</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="caracter_academico-<?php echo $contador?>">Carácter académico</label>
                                                                                        <select class="form-control" id="caracter_academico-<?php echo $contador?>" required>
                                                                                            <option value="<?php echo $caracter_academico?>" selected>Seleccione el carácter académico</option>
                                                                                            <option value="Universidad">Universidad</option>
                                                                                            <option value="Institución tecnológica">Institución tecnológica</option>
                                                                                            <option value="Institución técnica profesional">Institución técnica profesional</option>
                                                                                            <option value="Institución Universitaria/Escuela Tecnológica">Institución Universitaria/Escuela Tecnológica</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="email_principal-<?php echo $contador?>">Email principal</label>
                                                                                        <input type="email" class="form-control" id="email_principal-<?php echo $contador?>" value="<?php echo $email_principal?>" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="email_secundario-<?php echo $contador?>">Email secundario</label>
                                                                                        <input type="email" class="form-control" id="email_secundario-<?php echo $contador?>" value="<?php echo $email_secundario?>">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="telefono_principal-<?php echo $contador?>">Teléfono principal</label>
                                                                                        <input type="email" class="form-control" id="telefono_principal-<?php echo $contador?>" value="<?php echo $telefono_principal?>" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="telefono_secundario-<?php echo $contador?>">Teléfono secundario</label>
                                                                                        <input type="email" class="form-control" id="telefono_secundario-<?php echo $contador?>" value="<?php echo $telefono_secundario?>">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="sitio_web_institucion-<?php echo $contador?>">Sitio web</label>
                                                                                        <input type="email" class="form-control" id="sitio_web_institucion-<?php echo $contador?>" value="<?php echo $sitio_web_institucion?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-between">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                <button type="submit" class="btn" id="btn_actualizar-<?php echo $contador?>" style="background-color:#3498DB; color:#ffffff;">Actualizar</button>
                                                                            </div>
                                                                            <div id="respuesta"></div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                                <!-- Fin de modal de actualización de instituciones-->
                                                                <!--Script para el manejo de las acciones del modal de actualización de instituciones-->
                                                                <script>
                                                                    $("#btn_actualizar-<?php echo $contador?>").click(function () {
                                                                        var pk_id_institucion = $('#pk_id_institucion-<?php echo $contador?>').val();
                                                                        var nombre_institucion = $('#nombre_institucion-<?php echo $contador?>').val();
                                                                        var nit_institucion = $('#nit_institucion-<?php echo $contador?>').val();
                                                                        var sector_institucion = $('#sector_institucion-<?php echo $contador?>').val();
                                                                        var carcacter_academico = $('#carcacter_academico-<?php echo $contador?>').val();
                                                                        var email_principal = $('#email_principal-<?php echo $contador?>').val();
                                                                        var email_secundario = $('#email_secundario-<?php echo $contador?>').val();
                                                                        var telefono_principal = $('#telefono_principal-<?php echo $contador?>').val();
                                                                        var telefono_secundario = $('#telefono_secundario-<?php echo $contador?>').val();
                                                                        var sitio_web_institucion = $('#sitio_web_institucion-<?php echo $contador?>').val();

                                                                        var url = '../../controladores/instituciones/controllerModalActualizarInstitucion.php';

                                                                        $.post(url, {pk_id_usuario, nombre_institucion, nit_institucion, sector_institucion, email_principal, email_secundario, telefono_principal,telefono_secundario, sitio_web_institucion}, function (datos) {
                                                                            $('#respuesta_actualizar-<?php echo $contador?>').html(datos);
                                                                        });
                                                                    });
                                                                </script>
                                                                <div id="respuesta_actualizar-<?php echo $contador?>"></div>
                                                            </div>
                                                            <!-- Fin actualización de instituciones -->
                                                            <!-- Eliminación de instituciones -->
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger" title="Eliminar" onClick="eliminar(<?php echo $pk_id_institucion?>)"><i class="fa fa-trash-alt"></i></button>
                                                            </div>
                                                            <!-- Fin eliminación de instituciones -->
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

<!--Modal de registro de instituciones-->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content"  style="background-color:#d9d9d9;">
            <div class="modal-header" style="background-color:#2C3E50; color:#ffffff;">
                <h4 class="modal-title">Nueva institución</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#ffffff;>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de registro de instituciones -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre_institucion">Nombre</label>
                        <input type="text" class="form-control" id="nombre_institucion" name="nombre_institucion" placeholder="Ingrese el nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="nit_institucion">NIT</label>
                        <input type="text" class="form-control" id="nit_institucion" name="nit_institucion" placeholder="Ingrese el número de identificación" required>
                    </div>
                    <div class="form-group">
                        <label for="sector_institucion">Sector</label>
                        <select class="form-control" id="sector_institucion" name="sector_institucion" required>
                            <option value="Oficial" selected>Seleccione el sector</option>
                            <option value="Oficial">Oficial</option>
                            <option value="Oficial">Privado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="caracter_academico">Carácter académico</label>
                        <select class="form-control" id="caracter_academico" name="caracter_academico" required>
                            <option value="" selected>Seleccione el carácter académico</option>
                            <option value="Universidad">Universidad</option>
                            <option value="Oficial">Institución tecnológica</option>
                            <option value="Oficial">Institución técnica profesional</option>
                            <option value="Oficial">Institución Universitaria/Escuela Tecnológica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email_principal">Email principal</label>
                        <input type="email" class="form-control" id="email_principal" name="email_principal" placeholder="Ingrese el email principal" required>
                    </div>
                    <div class="form-group">
                        <label for="email_secundario">Email secundario</label>
                        <input type="email" class="form-control" id="email_secundario" name="email_secundario" placeholder="Ingrese el email secundario" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono_principal">Teléfono principal</label>
                        <input type="email" class="form-control" id="telefono_principal" name="telefono_principal" placeholder="Ingrese el telefono principal" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono_secundario">Teléfono secundario</label>
                        <input type="email" class="form-control" id="telefono_secundario" name="telefono_secundario" placeholder="Ingrese el telefono secundario" required>
                    </div>
                    <div class="form-group">
                        <label for="sitio_web_institucion">Sitio web</label>
                        <input type="email" class="form-control" id="sitio_web_institucion" name="sitio_web_institucion" placeholder="Ingrese la URL del sitio web" required>
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

<!--Script para el manejo de las acciones del modal de registro de instituciones-->
<script>
    $("#btn_registrar").click(function () {
        var nombre_institucion = $('#nombre_institucion').val();
        var nit_institucion = $('#nit_institucion').val();
        var sector_institucion = $('#sector_institucion').val();
        var carcacter_academico = $('#carcacter_academico').val();
        var email_principal = $('#email_principal').val();
        var email_secundario = $('#email_secundario').val();
        var telefono_principal = $('#telefono_principal').val();
        var telefono_secundario = $('#telefono_secundario').val();
        var sitio_web_institucion = $('#sitio_web_institucion').val();

        var url = '../../controladores/instituciones/controllerModalCrearInstitucion.php';
        $.post(url, {nombre_institucion, nit_institucion, sector_institucion, email_principal, email_secundario, telefono_principal,telefono_secundario, sitio_web_institucion}, function (datos) {
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Instituciones",
                "infoEmpty": "Mostrando 0 to 0 of 0 Instituciones",
                "infoFiltered": "(Filtrado de _MAX_ total Instituciones)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Instituciones",
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
            title: "¿Realmente desea eliminar esta institución?",
            text: "¡Esta acción no se puede deshacer!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Sí, eliminar!",
            cancelButtonText: "¡No, cancelar!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location="<?php echo $URL ?>/controladores/instituciones/controllerEliminarInstitucion.php?pk_id_institucion="+pk_id_institucion;
                swalWithBootstrapButtons.fire({
                    title: "¡Institución eliminada!",
                    text: "La institución seleccionada ha sido eliminada",
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