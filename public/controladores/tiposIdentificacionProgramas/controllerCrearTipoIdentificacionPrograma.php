<?php

include '../../configuracion.php';
include '../../layout/session.php';

$tip_ide_pro = $_POST['tip_ide_pro'];
$des_tip_pro = $_POST['des_tip_pro'];

$sql = "INSERT INTO identificacion_programa (tip_ide_pro, des_tip_pro, fec_cre_ide_pro, usu_mod_ide_pro) VALUES ('$tip_ide_pro', '$des_tip_pro', '$fechaHora', '$session_pk_id_usuario')";
$sentencia= $pdo->prepare($sql);
/*?>
<script>
    alert ("<?php echo ($sql); ?>");
</script>
<?php
//print_r ($sentencia);
*/
if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje']= "El tipo de identificación ha sido creado correctamente.";
    $_SESSION['icono']= "success";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/tiposIdentificacionProgramas/index.php";
    </script>
    <?php
} else {
    session_start();
    $_SESSION['mensaje']= "No fue posible crear el tipo de identificación";
    $_SESSION['icono']= "error";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/tiposIdentificacionPrograma/index.php";
    </script>
    <?php
}