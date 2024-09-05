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
                <div class="col-sm-8">
                    <h1 class="m-0">Crear usuario</h1>
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
                <!-- Formulario de registro de usuarios -->
                <form action="<?php echo $URL?>/controladores/usuarios/controllerCrearUsuario.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="identificacion_usuario">Identificación</label>
                            <input type="text" class="form-control" id="identificacion_usuario" name="identificacion_usuario" placeholder="Ingrese el número de identificación" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre_usuario">Nombre</label>
                            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Ingrese el nombre" required>
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
                        <div class="form-group">
                            <label for="telefono_usuario">Teléfono</label>
                            <input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario" placeholder="Ingrese el teléfono" required>
                        </div>
                        <div class="form-group">
                            <label for="email_usuario">Email</label>
                            <input type="email" class="form-control" id="email_usuario" name="email_usuario" placeholder="Ingrese el email" required>
                        </div>
                        <!--
                        <div class="form-group">
                            <label for="contrasena_usuario">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena_usuario" name="contrasena_usuario">
                        </div>
                        <div class="form-group">
                            <label for="contrasena_usuario_conf">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="contrasena_usuario_conf" name="contrasena_usuario_conf">
                        </div>
                        -->
                    </div>
                    <div class="card-footer">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <input type="hidden" id="session_pk_id_usuario" name="session_pk_id_usuario" value="<?php echo $session_pk_id_usuario?>">
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
include '../../layout/layout2.php';
include '../../layout/mensajes.php';

?>