<?php

include ('../../configuracion.php');
include ('../../layout/session.php');

$rap_id = $_POST['rap_id'];
$pro_id = $_POST['pro_id'];
$des_rap = $_POST['des_rap'];

$sentencia = $pdo->prepare("UPDATE resultado SET des_rap='$des_rap', fec_mod_rap='$fechaHora', usu_mod_rap='$session_pk_id_usuario' WHERE rap_id='$rap_id'");
//print_r($sentencia);
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje']= "El resultado de aprendizaje ha sido actualizado correctamente.";
        $_SESSION['icono']= "success";
        header('Location: '.$URL.'/interfaces/resultados/index.php?pro_id='.$pro_id);
} else {
    session_start();
    $_SESSION['mensaje']= "Error, no fue posible actualizar el resultado de aprendizaje";
    $_SESSION['icono']= "error";
    header('Location: '.$URL.'/interfaces/programas/actualizarPrograma.php?rap_id='.$rap_id);
}