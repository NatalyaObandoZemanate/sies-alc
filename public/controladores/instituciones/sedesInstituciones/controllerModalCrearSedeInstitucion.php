<?php

include ('../../../configuracion.php');
include ('../../../layout/session.php');

$nombre_sede = $_POST['nombre_sede'];
$direccion_sede = $_POST['direccion_sede'];
$fk_id_institucion = $_POST['fk_id_institucion'];
$fk_id_ciudad = $_POST['fk_id_ciudad'];
$fk_id_estado = $_POST['fk_id_estado'];
$fk_id_pais = $_POST['fk_id_pais'];
$acreditacion_alta_calidad = $_POST['acreditacion_alta_calidad'];
$fecha_acreditacion = $_POST['fecha_acreditacion'];
$resolucion_acreditacion = $_POST['resolucion_acreditacion'];
$vigencia_acreditacion = $_POST['vigencia_acreditacion'];
$codigo_institucion = $_POST['codigo_institucion'];
$fk_id_identificacion = $_POST['fk_id_identificacion'];

$sentencia = $pdo->prepare("INSERT INTO tbl_sede_institucion (nombre_sede, direccion_sede, fk_id_institucion, fk_id_ciudad, fk_id_estado, fk_id_pais, acreditacion_alta_calidad, fecha_acreditacion, resolucion_acreditacion, vigencia_acreditacion, codigo_institucion, fk_id_identificacion) values ('$nombre_sede', '$direccion_sede', '$fk_id_institucion', '$fk_id_ciudad', '$fk_id_estado', '$fk_id_pais', '$acreditacion_alta_calidad', '$fecha_acreditacion', '$resolucion_acreditacion', '$vigencia_acreditacion', '$codigo_institucion', '$fk_id_identificacion');");
print_r($sentencia);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje']= "La sede ha sido registrada correctamente.";
    $_SESSION['icono']= "success";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/instituciones/index.php";
    </script>
    <?php
} else {
    session_start();
    $_SESSION['mensaje']= "Error, no fue posible crear la sede";
    $_SESSION['icono']= "error";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/instituciones/index.php";
    </script>
    <?php
}