<?php

include ('../../configuracion.php');

$pk_id_usuario = $_POST['pk_id_usuario'];
$contrasena_usuario = $_POST['contrasena_usuario'];
$contrasena_usuario_conf = $_POST['contrasena_usuario_conf'];

// Definir requisitos de seguridad
$longitud_minima = 8;
$requiere_mayuscula = true;
$requiere_minuscula = true;
$requiere_numero = true;
$requiere_caracter_especial = true;

// Validar longitud mínima
if (strlen($contrasena_usuario) < $longitud_minima) {
    session_start();
    $_SESSION['mensaje'] = "La contraseña debe tener al menos $longitud_minima caracteres.";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/interfaces/usuarios/actualizarContrasena.php?pk_id_usuario='.$pk_id_usuario);
    exit;
}

// Validar mayúsculas si es requerido
if ($requiere_mayuscula && !preg_match('/[A-Z]/', $contrasena_usuario)) {
    session_start();
    $_SESSION['mensaje'] = "La contraseña debe contener al menos una letra mayúscula.";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/interfaces/usuarios/actualizarContrasena.php?pk_id_usuario='.$pk_id_usuario);
    exit;
}

// Validar minúsculas si es requerido
if ($requiere_minuscula && !preg_match('/[a-z]/', $contrasena_usuario)) {
    session_start();
    $_SESSION['mensaje'] = "La contraseña debe contener al menos una letra minúscula.";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/interfaces/usuarios/actualizarContrasena.php?pk_id_usuario='.$pk_id_usuario);
    exit;
}

// Validar número si es requerido
if ($requiere_numero && !preg_match('/[0-9]/', $contrasena_usuario)) {
    session_start();
    $_SESSION['mensaje'] = "La contraseña debe contener al menos un número.";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/interfaces/usuarios/actualizarContrasena.php?pk_id_usuario='.$pk_id_usuario);
    exit;
}

// Validar carácter especial si es requerido
if ($requiere_caracter_especial && !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $contrasena_usuario)) {
    session_start();
    $_SESSION['mensaje'] = "La contraseña debe contener al menos un carácter especial.";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/interfaces/usuarios/actualizarContrasena.php?pk_id_usuario='.$pk_id_usuario);
    exit;
}

// Si todas las validaciones son exitosas, proceder con la actualización de la contraseña
if ($contrasena_usuario == $contrasena_usuario_conf) {
    $contrasena_usuario = password_hash($contrasena_usuario, PASSWORD_DEFAULT);
    //echo $contrasena_usuario;

    $sentencia = $pdo->prepare("UPDATE tbl_usuario SET contrasena_usuario=:contrasena_usuario WHERE pk_id_usuario=:pk_id_usuario");
    $sentencia->bindParam(':contrasena_usuario', $contrasena_usuario);
    $sentencia->bindParam(':pk_id_usuario', $pk_id_usuario);

    if ($sentencia->execute()) {
        $sentencia_ingreso = $pdo->prepare("UPDATE tbl_usuario SET primer_ingreso = 1 WHERE pk_id_usuario = :pk_id_usuario");
        //print_r($sentencia_ingreso);
        $sentencia_ingreso->bindParam(':pk_id_usuario', $pk_id_usuario);
        $sentencia_ingreso->execute();

        session_start();
        $_SESSION['mensaje'] = "La contraseña ha sido actualizada correctamente.";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/index.php');
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error, no fue posible actualizar la contraseña.";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/index.php');
    }
} else {
    session_start();
        $_SESSION['mensaje'] = "Error, las contraseñas no coinciden";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/interfaces/usuarios/actualizarContrasena.php?pk_id_usuario='.$pk_id_usuario);
}

