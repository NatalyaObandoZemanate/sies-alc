<?PHP

include './configuracion.php';
include './layout/session.php';
include './layout/layout1.php';

//Se realiza la validación del primer ingreso al sistema
include './controladores/usuarios/controllerValidacionIngreso.php';
include './controladores/usuarios/controllerListaUsuarios.php';
include './controladores/roles/controllerListaRoles.php';
include './controladores/programas/controllerMostrarProgramas.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <!--<h1 class="m-0">Ha ingresado como <?php echo $session_nombre_usuario?></h1>-->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php
    // Se valida el rol con el que se ingresa al sistema para definir el contenido al que tiene acceso
    if ($session_nombre_rol=='Administrador') {
        include './dashboard/dashboard_administrador.php';
    } elseif ($session_nombre_rol=='Director') {
        include './dashboard/dashboard_director.php';
    } elseif ($session_nombre_rol=='Gestor') {
        include './dashboard/dashboard_gestor.php';
    } elseif ($session_nombre_rol=='Profesor') {
        include './dashboard/dashboard_profesor.php';
    }
    ?>

</div>
<!-- /.content-wrapper -->
<?php
include './layout/layout2.php';
include './layout/mensajes.php';
?>