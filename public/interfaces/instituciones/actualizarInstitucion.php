<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/instituciones/controllerVerInstitucion.php';
include '../../controladores/tiposIdentificacionInstituciones/controllerListarIdentificacionesInstituciones.php';
include '../../controladores/paises/controllerListarPaises.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">Actualizar institución</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Diligencie los datos</h3>
                </div>
                <!-- Formulario de registro de instituciones -->
                <form action="<?php echo $URL?>/controladores/instituciones/controllerActualizarInstitucion.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="fk_tip_codigo_institucion">Tipo de identificación</label>
                            <select class="form-control" id="fk_tip_codigo_institucion" name="fk_tip_codigo_institucion" required>
                                <?php
                                foreach ($datos_cat_identificacion_instituciones as $dato_identificacion) {
                                    $nombre_tipo = $dato_identificacion['tip_codigo_institucion'];
                                    $tipo_id = $dato_identificacion['ide_pk_id_institucion'];
                                ?>
                                <option value="<?php echo $tipo_id?>" <?php if ($nombre_tipo == $tip_codigo_institucion){?>
                                        selected="selected"<?php }?>>
                                        <?php echo $nombre_tipo?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="codigo_institucion">Identificación de la institución</label>
                            <input type="text" class="form-control" id="codigo_institucion" name="codigo_institucion" value="<?php echo $codigo_institucion?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre_institucion">Nombre</label>
                            <input type="text" class="form-control" id="nombre_institucion" name="nombre_institucion" value="<?php echo $nombre_institucion?>" required>
                        </div>
                        <div class="form-group">
                            <label for="fk_id_pais">País</label>
                            <select class="form-control" id="fk_id_pais" name="fk_id_pais" onchange="cargarEstados()">
                                <!-- Las opciones se llenarán dinámicamente mediante JavaScript -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fk_codigo_estado">Estado</label>
                            <select class="form-control" id="fk_codigo_estado" name="fk_codigo_estado" onchange="cargarCiudades()" disabled>
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
                            <label for="telefono_institucion">Teléfono</label>
                            <input type="text" class="form-control" id="telefono_institucion" name="telefono_institucion" value="<?php echo $telefono_institucion?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email_institucion">Email</label>
                            <input type="email" class="form-control" id="email_institucion" name="email_institucion" value="<?php echo $email_institucion?>" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" value="<?php echo $pk_id_institucion?>" name="pk_id_institucion">
                        <input type="hidden" value="<?php echo $session_pk_id_usuario?>" name="session_pk_id_usuario">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include '../../layout/layout2.php';
?>

<!--Función para carga de países, estados y ciudades desde BD-->
<script>
    // Función para cargar los países desde la base de datos
    function cargarPaises() {
        console.log("Países");
        // Hacer una solicitud AJAX para obtener la lista de países
        $.ajax({
            url: `../../controladores/paises/controllerObtenerPaises.php`,
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
        //console.log(fk_id_pais);

        // Hacer una solicitud AJAX para obtener la lista de estados del país seleccionado
        $.ajax({
            url: `../../controladores/estados/controllerObtenerEstados.php?fk_id_pais=${fk_id_pais}`,
            method: 'GET',
            success: function(data) {
            // Llenar el select de estados con los datos obtenidos
            $("#fk_codigo_estado").html(data);
            // Habilitar el select de estados
            $("#fk_codigo_estado").prop('disabled', false);
            }
        });
    }

    // Función para cargar ciudades basadas en el estado seleccionado
    function cargarCiudades() {
        const fk_codigo_estado = $("#fk_codigo_estado").val();

        // Hacer una solicitud AJAX para obtener la lista de ciudades del estado seleccionado
        $.ajax({
            url: `../../controladores/ciudades/controllerObtenerCiudades.php?fk_codigo_estado=${fk_codigo_estado}`,
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