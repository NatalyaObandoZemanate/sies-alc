<?php

include ('../../configuracion.php');

$pk_id_rol = $_POST['pk_id_rol'];
$nombre_rol = $_POST['nombre_rol'];
$descripcion_rol = $_POST['descripcion_rol'];

$sentencia = $pdo->prepare("UPDATE rol SET nombre_rol='$nombre_rol', descripcion_rol='$descripcion_rol', fec_mod_rol='$fechaHora' WHERE pk_id_rol='$pk_id_rol'");
$sentencia->execute();
session_start();
$_SESSION['mensaje']= "El rol ha sido actualizado correctamente.";
$_SESSION['icono']= "success";
header('Location: '.$URL.'/interfaces/roles/index.php');
