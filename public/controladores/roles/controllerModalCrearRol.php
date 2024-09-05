<?php

include ('../../configuracion.php');
include ('../../layout/session.php');

$nombre_rol = $_POST['nombre_rol'];
$descripcion_rol = $_POST['descripcion_rol'];

$sentencia = $pdo->prepare("INSERT INTO tbl_rol (nombre_rol, descripcion_rol) values ('$nombre_rol', '$descripcion_rol');");
//print_r($sentencia);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje']= "El Rol ha sido creado correctamente.";
    $_SESSION['icono']= "success";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/roles/index.php";
    </script>
    <?php
} else {
    session_start();
    $_SESSION['mensaje']= "Error, no fue posible crear el rol";
    $_SESSION['icono']= "error";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/roles/index.php";
    </script>
    <?php
}
