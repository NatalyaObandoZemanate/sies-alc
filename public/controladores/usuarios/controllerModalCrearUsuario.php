<?php

include ('../../configuracion.php');
include ('../../layout/session.php');

$session_pk_id_usuario = $_POST['session_pk_id_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$identificacion_usuario = $_POST['identificacion_usuario'];
$telefono_usuario = $_POST['telefono_usuario'];
$email_usuario = $_POST['email_usuario'];
$contrasena_usuario = $_POST['identificacion_usuario'];
$fk_id_rol = $_POST['fk_id_rol'];

$query= $pdo->prepare("SELECT COUNT(*) as countUsu FROM tbl_usuario WHERE email_usuario = '$email_usuario'");
$query->execute();
$datos_query = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_query as $dato_query){
    $countUsu = $dato_query['countUsu'];
}

if ($countUsu==0) {
    $contrasena_usuario = password_hash($contrasena_usuario, PASSWORD_DEFAULT);
    $sentencia = $pdo->prepare("INSERT INTO tbl_usuario (nombre_usuario, identificacion_usuario, telefono_usuario, email_usuario, contrasena_usuario, fk_id_rol) values ('$nombre_usuario', '$identificacion_usuario', '$telefono_usuario', '$email_usuario', '$contrasena_usuario', '$fk_id_rol');");
    //print_r($sentencia);

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje']= "El Usuario ha sido registrado correctamente.";
        $_SESSION['icono']= "success";
        ?>
        <script>
            location.href="<?php echo $URL?>/interfaces/usuarios/index.php";
        </script>
        <?php
    } else {
        session_start();
        $_SESSION['mensaje']= "Error, no fue posible crear el usuario";
        $_SESSION['icono']= "error";
        ?>
        <script>
            location.href="<?php echo $URL?>/interfaces/usuarios/index.php";
        </script>
        <?php
    }
} else {
    session_start();
    $_SESSION['mensaje']= "El correo electrónico ya se encuetra registrado";
    $_SESSION['icono']= "error";
    header('Location: '.$URL.'/interfaces/usuarios/crearUsuario.php');
}

