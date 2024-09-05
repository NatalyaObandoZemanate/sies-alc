<?php

include ('../../configuracion.php');

$email_usuario = $_POST['email_usuario'];
$contrasena_usuario = $_POST['contrasena_usuario'];
$count = 0;

print_r($email_usuario);
print_r($contrasena_usuario);

$sql = "select * from tbl_usuario where email_usuario='$email_usuario'";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $count=$count+1;
    $email_usuario_tabla = $usuario['email_usuario'];
    $nombre_usuario_tabla = $usuario['nombre_usuario'];
    $contrasena_usuario_tabla = $usuario['contrasena_usuario'];
}

//if (($count > 0) && (password_verify($contrasena_usuario, $contrasena_usuario_tabla))){
if (($count > 0) && ($contrasena_usuario == $contrasena_usuario_tabla)){
    echo "Ingreso exitoso";
    session_start();
    $_SESSION['session_email_usuario'] =$email_usuario;
    header('Location: '.$URL.'/index.php');
} else {
    echo "Datos incorrectos, vuelva a intentar";
    session_start();
    $_SESSION['session_mensaje']= "Error, datos incorrectos";
    header('Location: '.$URL.'/index.php');
}