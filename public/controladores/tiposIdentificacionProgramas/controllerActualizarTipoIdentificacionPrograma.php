<?php

include '../../configuracion.php';
include '../../layout/session.php';

$ide_pro_id = $_POST['ide_pro_id'];
$tip_ide_pro = $_POST['tip_ide_pro'];
$des_tip_pro = $_POST['des_tip_pro'];

$sentencia = $pdo->prepare("UPDATE identificacion_programa SET tip_ide_pro='$tip_ide_pro', des_tip_pro='$des_tip_pro', fec_mod_ide_pro='$fechaHora', usu_mod_ide_pro='$session_pk_id_usuario' WHERE ide_pro_id='$ide_pro_id'");
//print_r ($sentencia);

if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje']= "El tipo de identificación ha sido actualizado correctamente.";
    $_SESSION['icono']= "success";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/tiposIdentificacionProgramas/index.php";
    </script>
    <?php
} else {
    session_start();
    $_SESSION['mensaje']= "No fue posible actualizar el tipo de identificación";
    $_SESSION['icono']= "error";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/tiposIdentificacionProgramas/index.php";
    </script>
    <?php
}