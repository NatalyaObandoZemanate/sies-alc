<?php

include "../../configuracion.php";
include ('../../layout/session.php');

$fk_pk_id_institucion = $_POST['pk_id_institucion'];
$nom_pro = $_POST['nom_pro'];
$per_egr =$_POST['per_egr'];

$sentencia = $pdo->prepare("INSERT INTO programa (fk_pk_id_institucion, nom_pro, per_egr, fec_cre_pro, usu_mod_pro) "
    . "values ('$fk_pk_id_institucion', '$nom_pro', '$per_egr', '$fechaHora', '$session_pk_id_usuario')");
print_r($sentencia);
if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje']= "El programa ha sido creado correctamente.";
    $_SESSION['icono']= "success";
    header('Location: '.$URL.'/interfaces/programas/index.php?pk_id_institucion='.$fk_pk_id_institucion);
} else {
    session_start();
    $_SESSION['mensaje']= "No fue posible crear el programa.";
    $_SESSION['icono']= "error";
    header('Location: '.$URL.'/interfaces/programas/crearPrograma.php');
}

