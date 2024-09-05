<?php

include ('../../configuracion.php');

$session_pk_id_usuario = $_POST['session_pk_id_usuario'];
$pk_id_institucion = $_POST['pk_id_institucion'];
$codigo_institucion = $_POST['codigo_institucion'];
$nombre_institucion = $_POST['nombre_institucion'];
$fk_id_pais = $_POST['fk_id_pais'];
$fk_codigo_estado = $_POST['fk_codigo_estado'];
$fk_id_ciudad = $_POST['fk_id_ciudad'];
$telefono_institucion = $_POST['telefono_institucion'];
$email_institucion = $_POST['email_institucion'];

$sentencia = $pdo->prepare("UPDATE institucion SET codigo_institucion='$codigo_institucion', nombre_institucion='$nombre_institucion', fk_id_pais='$fk_id_pais', fk_codigo_estado='$fk_codigo_estado', fk_id_ciudad='$fk_id_ciudad', telefono_institucion='$telefono_institucion', email_institucion='$email_institucion', fec_mod_ins='$fechaHora', usu_mod_ins='$session_pk_id_usuario' WHERE pk_id_institucion='$pk_id_institucion'");
//print_r($sentencia);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje']= "La institución ha sido actualizada correctamente.";
        $_SESSION['icono']= "success";
        header('Location: '.$URL.'/interfaces/instituciones/index.php');
} else {
    session_start();
    $_SESSION['mensaje']= "Error, no fue posible actualizar la institución";
    $_SESSION['icono']= "error";
    header('Location: '.$URL.'/interfaces/instituciones/actualizarInstitucion.php?pk_id_institucion='.$pk_id_institucion);
}