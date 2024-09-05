<?php

include ('../../configuracion.php');
include ('../../layout/session.php');

$pro_id = $_POST['pro_id'];
$nom_pro = $_POST['nom_pro'];
$per_egr = $_POST['per_egr'];
$nombre_institucion = $_POST['nombre_institucion'];
$pk_id_institucion = $_POST['pk_id_institucion'];

$sentencia = $pdo->prepare("UPDATE programa SET nom_pro='$nom_pro', per_egr='$per_egr', fec_mod_pro='$fechaHora', usu_mod_pro='$session_pk_id_usuario' WHERE pro_id='$pro_id'");
//print_r($sentencia);

if ($sentencia->execute()) {
    //print_r($sentencia);
    session_start();
    $_SESSION['mensaje']= "El programa ha sido actualizado correctamente.";
    $_SESSION['icono']= "success";
    header('Location: '.$URL.'/interfaces/programas/index.php?pk_id_institucion='.$pk_id_institucion.'&nombre_institucion='.$nombre_institucion);
} else {
    session_start();
    $_SESSION['mensaje']= "Error, no fue posible actualizar el programa";
    $_SESSION['icono']= "error";
    header('Location: '.$URL.'/interfaces/programas/actualizarPrograma.php?pro_id='.$pro_id);
}
