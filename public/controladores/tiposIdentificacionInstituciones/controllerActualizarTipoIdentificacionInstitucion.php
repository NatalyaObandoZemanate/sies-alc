<?php

include '../../configuracion.php';
include '../../layout/session.php';

$ide_pk_id_institucion = $_POST['ide_pk_id_institucion'];
$tip_codigo_institucion = $_POST['tip_codigo_institucion'];
$des_tip_ins = $_POST['des_tip_ins'];

$sentencia = $pdo->prepare("UPDATE cat_identificacion_institucion SET tip_codigo_institucion='$tip_codigo_institucion', des_tip_ins='$des_tip_ins', fec_mod_codigo_institucion='$fechaHora', usu_mod_codigo_institucion='$session_pk_id_usuario' WHERE ide_pk_id_institucion='$ide_pk_id_institucion'");
//print_r ($sentencia);

if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje']= "El tipo de identificación ha sido actualizado correctamente.";
    $_SESSION['icono']= "success";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/tiposIdentificacionInstituciones/index.php";
    </script>
    <?php
} else {
    session_start();
    $_SESSION['mensaje']= "No fue posible actualizar el tipo de identificación";
    $_SESSION['icono']= "error";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/tiposIdentificacionInstituciones/index.php";
    </script>
    <?php
}