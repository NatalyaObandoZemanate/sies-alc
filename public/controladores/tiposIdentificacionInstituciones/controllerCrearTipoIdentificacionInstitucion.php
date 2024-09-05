<?php

include '../../configuracion.php';
include '../../layout/session.php';

$tip_codigo_institucion = $_POST['tip_codigo_institucion'];
$des_tip_ins = $_POST['des_tip_ins'];

$sentencia = $pdo->prepare("INSERT INTO cat_identificacion_institucion (tip_codigo_institucion, des_tip_ins, fec_cre_codigo_institucion, usu_mod_codigo_institucion) VALUES ('$tip_codigo_institucion', '$des_tip_ins', '$fechaHora', '$session_pk_id_usuario')");

if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje']= "El tipo de identificación ha sido creado correctamente.";
    $_SESSION['icono']= "success";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/tiposIdentificacionInstituciones/index.php";
    </script>
    <?php
} else {
    session_start();
    $_SESSION['mensaje']= "No fue posible crear el tipo de identificación";
    $_SESSION['icono']= "error";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/tiposIdentificacionInstituciones/index.php";
    </script>
    <?php
}