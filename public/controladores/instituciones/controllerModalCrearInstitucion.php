<?php

include ('../../configuracion.php');
include ('../../layout/session.php');

$nombre_institucion = $_POST['nombre_institucion'];
$nit_institucion = $_POST['nit_institucion'];
$sector_institucion = $_POST['sector_institucion'];
$caracter_academico = $_POST['caracter_academico'];
$email_principal = $_POST['email_principal'];
$email_secundario = $_POST['email_secundario'];
$telefono_principal = $_POST['telefono_principal'];
$telefono_secundario = $_POST['telefono_secundario'];
$sitio_web_institucion = $_POST['sitio_web_institucion'];

$query= $pdo->prepare("SELECT COUNT(*) as countIns FROM tbl_institucion WHERE nit_institucion = '$nit_institucion'");
$query->execute();
$datos_query = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_query as $dato_query){
    $countIns = $dato_query['countIns'];
}

if ($countIns==0) {
    $sentencia = $pdo->prepare("INSERT INTO tbl_institucion (nombre_institucion, nit_institucion, sector_institucion, caracter_academico, email_principal, email_secundario, telefono_principal, telefono_secundario, sitio_web_institucion) values ('$nombre_institucion', '$nit_institucion', '$sector_institucion', '$caracter_academico', '$email_principal', '$email_secundario', '$telefono_principal', '$telefono_secundario', '$sitio_web_institucion');");
    //print_r($sentencia);

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje']= "La institución ha sido registrada correctamente.";
        $_SESSION['icono']= "success";
        ?>
        <script>
            location.href="<?php echo $URL?>/interfaces/instituciones/index.php";
        </script>
        <?php
    } else {
        session_start();
        $_SESSION['mensaje']= "Error, no fue posible crear la institucion";
        $_SESSION['icono']= "error";
        ?>
        <script>
            location.href="<?php echo $URL?>/interfaces/instituciones/index.php";
        </script>
        <?php
    }
} else {
    session_start();
    $_SESSION['mensaje']= "El NIT ingresado ya se encuentra registrado";
    $_SESSION['icono']= "error";
    header('Location: '.$URL.'/interfaces/instituciones/index.php');
}

