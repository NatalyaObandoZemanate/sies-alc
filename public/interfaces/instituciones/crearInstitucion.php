<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/instituciones/controllerListaInstituciones.php';
include '../../controladores/tiposIdentificacionInstituciones/controllerListarIdentificacionesInstituciones.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">Crear institución</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Diligencie los datos</h3>
                </div>
                <!-- Formulario de registro de instituciones -->
                <form action="<?php echo $URL?>/controladores/instituciones/controllerCrearInstitucion.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <!-- Combobox para la selección del tipo de identificación de la institución -->
                            <label for="fk_tip_codigo_institucion">Tipo de identificación</label>
                            <select text class="form-control" id="fk_tip_codigo_institucion" name="fk_tip_codigo_institucion" required>
                                <?php
                                foreach ($datos_cat_identificacion_instituciones as $dato_identificacion) {
                                ?>
                                <option value="<?php echo $dato_identificacion['ide_pk_id_institucion']?>"><?php echo $dato_identificacion['tip_codigo_institucion']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="codigo_institucion">Identificación de la institución</label>
                            <input type="text" class="form-control" id="codigo_institucion" name="codigo_institucion" placeholder="Ingrese el número registro de la institución" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre_institucion">Nombre</label>
                            <input type="text" class="form-control" id="nombre_institucion" name="nombre_institucion" placeholder="Ingrese el nombre" required>
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
                            <input type="text" class="form-control" id="telefono_institucion" name="telefono_institucion" placeholder="Ingrese el teléfono" required>
                        </div>
                        <div class="form-group">
                            <label for="email_institucion">Email</label>
                            <input type="email" class="form-control" id="email_institucion" name="email_institucion" placeholder="Ingrese el email" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" value="<?php echo $session_pk_id_usuario?>" name="session_pk_id_usuario">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                </form>
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
        console.log(fk_id_pais);

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
        console.log("Ciudades");
        console.log(fk_codigo_estado);

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

<!--Función para cargar los países desde la API
<script>
    // Función para cargar los países desde la API
    function cargarPaises() {
        // Hacer una solicitud AJAX a la API Rest Countries
        $.ajax({
            url: 'https://restcountries.com/v3.1/all',
            method: 'GET',
            success: function(data) {
            // Llenar el select de países con los datos obtenidos
            data.sort((a, b) => a.name.common.localeCompare(b.name.common));
            data.forEach(function(country) {
                $("#pai_ins").append(`<option value="${country.name.common}">${country.name.common}</option>`);
            });
            }
        });
    }

    // Función para cargar estados y ciudades basados en el país seleccionado
    function cargarEstadosYCiudades() {
        // Limpiar selectores de estados y ciudades
        $("#est_ins").html('<option value="" disabled selected>Seleccionar Estado</option>');
        $("#ciu_ins").html('<option value="" disabled selected>Seleccionar Ciudad</option>');

        // Obtener el país seleccionado
        const paisSeleccionado = $("#pais").val();

        // Habilitar el selector de estados
        $("#est_ins").prop('disabled', false);

        // Hacer una solicitud AJAX para obtener los estados y ciudades del país seleccionado
        // Aquí debes reemplazar la URL_DE_TU_API_PARA_ESTADOS_Y_CIUDADES con la URL correcta
        $.ajax({
            url: `URL_DE_TU_API_PARA_ESTADOS_Y_CIUDADES?pais=${paisSeleccionado}`,
            method: 'GET',
            success: function(data) {
            // Llenar el select de estados con los datos obtenidos
            data.estados.forEach(function(estado) {
                $("#est_ins").append(`<option value="${estado}">${estado}</option>`);
            });

            // Llenar el select de ciudades con los datos obtenidos
            data.ciudades.forEach(function(ciudad) {
                $("#ciu_ins").append(`<option value="${ciudad}">${ciudad}</option>`);
            });

            // Habilitar el selector de ciudades
            $("#ciu_ins").prop('disabled', false);
            }
        });
    }

        // Llamar a la función al cargar la página
    $(document).ready(function() {
        cargarPaises();
    });
</script>
-->

<!-- Función para cargar países, estados y ciudades desde restcountries
<script>
    function cargarPaisesNuevo() {
        fetch("https://restcountries.com/v3.1/all")
            .then(response => response.json())
            .then(data => {
                // Ordenar países alfabéticamente por nombre común
                data.sort((a, b) => a.name.common.localeCompare(b.name.common));

                const selectPais = document.getElementById("pais");
                limpiarSelect(selectPais);

                data.forEach(pais => {
                    const option = document.createElement("option");
                    option.value = pais.cca2;
                    option.textContent = pais.name.common;
                    selectPais.appendChild(option);
                });

                // Llamar a cargarEstados después de cargar los países
                cargarEstadosNuevo();
            })
            .catch(error => console.error("Error al cargar países", error));
    }

    function cargarEstadosNuevo() {
        const codigoPais = document.getElementById("pais").value;
        fetch(`https://restcountries.com/v3.1/alpha/${codigoPais}`)
            .then(response => response.json())
            .then(data => {
                const selectEstado = document.getElementById("estado");
                limpiarSelect(selectEstado);

                if (data.hasOwnProperty("subdivisions")) {
                    const estados = Object.values(data.subdivisions).flat();
                    estados.sort(); // Ordenar estados alfabéticamente
                    estados.forEach(estado => {
                        const option = document.createElement("option");
                        option.value = estado;
                        option.textContent = estado;
                        selectEstado.appendChild(option);
                    });
                }

                // Llamar a cargarCiudades después de cargar los estados
                cargarCiudadesNuevo();
            })
            .catch(error => console.error("Error al cargar estados", error));
    }

    function cargarCiudadesNuevo() {
        // Puedes implementar la carga de ciudades según tu estructura de datos o utilizar otra API.
        // Aquí se proporciona un ejemplo básico.
    }

    // Llamar a la función al cargar la página
    $(document).ready(function() {
        cargarPaisesNuevo();
    });

    function limpiarSelect(selectElement) {
        while (selectElement.firstChild) {
            selectElement.removeChild(selectElement.firstChild);
        }
    }
</script>
-->