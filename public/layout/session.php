<?php
//Se da inicio a la sesión
session_start();
//Se obtiene el correo electrónico del usuario que inicia sesión
$session_email_usuario= $_SESSION['session_email_usuario'];
if (isset($_SESSION['session_email_usuario'])){
    //echo "Ha ingresado como ".$_SESSION['session_email_usuario'];
    $sql = "SELECT tbl_usuario.pk_id_usuario, tbl_usuario.pk_id_usuario, tbl_usuario.nombre_usuario, tbl_usuario.telefono_usuario, tbl_usuario.email_usuario, tbl_rol.nombre_rol from tbl_usuario INNER JOIN tbl_rol ON tbl_usuario.fk_id_rol = tbl_rol.pk_id_rol WHERE email_usuario = '$session_email_usuario'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    //Se obtienen datos de sesion del usuario loggeado
    foreach ($usuarios as $usuario) {
        $session_pk_id_usuario = $usuario['pk_id_usuario'];
        $session_nombre_usuario = $usuario['nombre_usuario'];
        $session_nombre_rol = $usuario['nombre_rol'];
    }
} else {
    echo "No ha iniciado sesion";
    header('Location: '.$URL.'/interfaces/login/index.php');
}