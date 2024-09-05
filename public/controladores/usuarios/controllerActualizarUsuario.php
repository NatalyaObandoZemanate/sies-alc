<?php

include ('../../configuracion.php');

$pk_id_usuario = $_POST['pk_id_usuario'];
$identificacion_usuario = $_POST['identificacion_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$fk_id_rol = $_POST['fk_id_rol'];
$telefono_usuario = $_POST['telefono_usuario'];
$email_usuario = $_POST['email_usuario'];
$usu_mod_usu = $_POST['session_pk_id_usuario'];

$sentencia = $pdo->prepare("UPDATE usuario SET identificacion_usuario='$identificacion_usuario', nombre_usuario='$nombre_usuario', fk_id_rol='$fk_id_rol', telefono_usuario='$telefono_usuario', email_usuario='$email_usuario', fec_mod_usu='$fechaHora', usu_mod_usu='$usu_mod_usu' WHERE pk_id_usuario='$pk_id_usuario'");
print_r ($sentencia);
/*
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje']= "El Usuario ha sido actualizado correctamente.";
    $_SESSION['icono']= "success";
    if ($session_nombre_rol=='Administrador') {
        header('Location: '.$URL.'/interfaces/usuarios/index.php');
    } else {
        header('Location: '.$URL.'/index.php');
    }
} else {
    session_start();
    $_SESSION['mensaje']= "No fue posible actualizar el usuario.";
    $_SESSION['icono']= "error";
}
    */