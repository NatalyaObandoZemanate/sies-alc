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
                    <h1 class="m-0">Actualizar usuario</h1>
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
                    <h3 class="card-title">Diligencie los datos del usuario</h3>
                </div>
                <!-- Formulario de actualización de datos -->
                <form action="<?php echo $URL?>/controladores/usuarios/controllerActualizarUsuario.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="identificacion_usuario">Identificación</label>
                            <input type="text" class="form-control" id="identificacion_usuario" name="identificacion_usuario" value="<?php echo $identificacion_usuario?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre_usuario">Nombre</label>
                            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" value="<?php echo $nombre_usuario?>" required>
                        </div>
                        <?php
                        if ($session_nombre_rol=="Administrador") {
                            ?>
                            <div class="form-group">
                                <label for="fk_id_rol">Rol del usuario</label>
                                <select class="form-control" id="fk_id_rol" name="fk_id_rol" required>
                                    <?php
                                    foreach ($datos_roles as $dato_rol) {
                                        $nombre_rol = $dato_rol['nombre_rol'];
                                        $pk_id_rol = $dato_rol['pk_id_rol'];
                                    ?>
                                    <option value="<?php echo $pk_id_rol?>" <?php if ($nombre_rol == $nombre_rol){?> selected="selected"<?php }?>>
                                        <?php echo $nombre_rol?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="form-group">
                                <!--No mostrar opcion de rol-->
                                <input type="hidden" name="fk_id_rol" value="<?php echo $fk_id_rol?>">
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            <label for="telefono_usuario">Teléfono</label>
                            <input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario" value="<?php echo $telefono_usuario?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email_usuario">Email</label>
                            <input type="email" class="form-control" id="email_usuario" name="email_usuario" value="<?php echo $email_usuario?>" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pk_id_usuario" value="<?php echo $pk_id_usuario?>">
                        <input type="hidden" name="session_pk_id_usuario" value="<?php echo $session_pk_id_usuario?>">
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
include '../../layout/mensajes.php';
include '../../layout/layout2.php';
?>
