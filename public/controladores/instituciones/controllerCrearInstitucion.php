<?php

include ('../../configuracion.php');

$session_pk_id_usuario = $_POST['session_pk_id_usuario'];
$fk_tip_codigo_institucion = $_POST['fk_tip_codigo_institucion'];
$codigo_institucion = $_POST['codigo_institucion'];
$nombre_institucion = $_POST['nombre_institucion'];
$fk_id_pais = $_POST['fk_id_pais'];
$fk_codigo_estado = $_POST['fk_codigo_estado'];
$fk_id_ciudad = $_POST['fk_id_ciudad'];
$telefono_institucion = $_POST['telefono_institucion'];
$email_institucion = $_POST['email_institucion'];

//Se realiza la consulta de instituciones con el número de identificación
$query= $pdo->prepare("SELECT COUNT(*) as countIns FROM tbl_institucion WHERE codigo_institucion = $codigo_institucion");
$query->execute();
$datos_query = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_query as $dato_query){
    $countIns = $dato_query['countIns'];
    //echo $countIns;
}

//Se valida que no exista la institución con el mismo número de identificación
if ($countIns==0) {
    $sentencia = $pdo->prepare("INSERT INTO tbl_institucion (fk_tip_codigo_institucion, codigo_institucion, nombre_institucion, fk_id_pais, fk_codigo_estado, fk_id_ciudad, telefono_institucion, email_institucion, fec_cre_ins, usu_mod_ins) values ('$fk_tip_codigo_institucion', '$codigo_institucion', '$nombre_institucion', '$fk_id_pais', '$fk_codigo_estado', '$fk_id_ciudad', '$telefono_institucion', '$email_institucion', '$fechaHora', '$session_pk_id_usuario')");
    print_r ($sentencia);
    if ($sentencia->execute()){
        session_start();
        $_SESSION['mensaje']= "La institución ha sido creada correctamente.";
        $_SESSION['icono']= "success";
        header('Location: '.$URL.'/interfaces/instituciones/index.php');
    } else {
        session_start();
        $_SESSION['mensaje']= "Ha habido un error";
        $_SESSION['icono']= "error";
        header('Location: '.$URL.'/interfaces/instituciones/crearInstitucion.php');
    }
} else {
    echo "No se puede crear";
    session_start();
    $_SESSION['mensaje']= "Ya existe la institución";
    $_SESSION['icono']= "error";
    header('Location: '.$URL.'/interfaces/instituciones/index.php');
}
