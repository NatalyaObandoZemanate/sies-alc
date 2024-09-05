<?PHP

include '../../configuracion.php';
include '../../layout/session.php';
include '../../layout/layout1.php';
include '../../controladores/usuarios/controllerVerUsuario.php';
include '../../controladores/roles/controllerListaRoles.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">Actualizar contraseña</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-warning col-md-6">
                <div class="card-header">
                    <h3 class="card-title"><b>La contraseña debe tener las siguientes características:</b></h3>
                </div>
                <!-- Formulario de actualización de datos -->
                <form action="<?php echo $URL?>/controladores/usuarios/controllerActualizarContrasena.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <ul>
                                <li>Mínimo 8 carácteres de longitud</li>
                                <li>Al menos una letra mayúscula</li>
                                <li>Al menos una letra minúscula</li>
                                <li>Al menos un número</li>
                                <li>Al menos un símbolo especial (/[!@#$%^&*(),.?":{}|<>]/)</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="contrasena_usuario">Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control col-md-10" id="contrasena_usuario" name="contrasena_usuario" size="50">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="mostrarOcultarContrasena('contrasena_usuario')">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrasena_usuario_conf">Confirmar contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control col-md-10" id="contrasena_usuario_conf" name="contrasena_usuario_conf">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="mostrarOcultarContrasena('contrasena_usuario_conf')">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pk_id_usuario" value="<?php echo $pk_id_usuario?>">
                        <input type="hidden" name="session_pk_id_usuario" value="<?php echo $session_pk_id_usuario?>">
                        <a href="<?php echo $URL?>/index.php" class="btn btn-secondary">Cancelar</a>
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
include '../../layout/mensajes.php';
include '../../layout/layout2.php';
?>

<script>
    function mostrarOcultarContrasena(idCampo) {
        var campo = document.getElementById(idCampo);
        var icono = campo.parentNode.querySelector('.input-group-text i');

        if (campo.type === 'password') {
            campo.type = 'text';
            icono.classList.remove('fa-eye');
            icono.classList.add('fa-eye-slash');
        } else {
            campo.type = 'password';
            icono.classList.remove('fa-eye-slash');
            icono.classList.add('fa-eye');
        }
    }
</script>