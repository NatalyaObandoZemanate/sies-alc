<?php

include ('../../configuracion.php');

$nombre_rol = $_POST['nombre_rol'];
$descripcion_rol = $_POST['descripcion_rol'];

$sentencia = $pdo->prepare("INSERT INTO rol (nombre_rol, descripcion_rol, fec_cre_rol) values ('$nombre_rol', '$descripcion_rol', '$fechaHora')");
print_r ($sentencia);
/*if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje']= "El Rol ha sido creado correctamente.";
    $_SESSION['icono']= "success";
    header('Location: '.$URL.'/interfaces/roles/index.php');
} else {
    session_start();
    $_SESSION['mensaje']= "No fue posible crear el rol.";
    $_SESSION['icono']= "error";
    header('Location: '.$URL.'/interfaces/roles/crearRol.php');
}
*/