<?php

include "../../configuracion.php";
include ('../../layout/session.php');

$fk_pro_id = $_POST['pro_id'];
$des_rap = $_POST['des_rap'];

$sentencia = $pdo->prepare("INSERT INTO resultado (fk_pro_id, des_rap, fec_cre_rap, usu_mod_rap) "
    . "values ('$fk_pro_id', '$des_rap', '$fechaHora', '$session_pk_id_usuario')");
//print_r($sentencia);
if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje']= "El resultado de aprendizaje ha sido creado correctamente.";
    $_SESSION['icono']= "success";
    header('Location: '.$URL.'/interfaces/resultados/index.php?pro_id='.$fk_pro_id);
} else {
    session_start();
    $_SESSION['mensaje']= "No fue posible crear el programa.";
    $_SESSION['icono']= "error";
    header('Location: '.$URL.'interfaces//resultados/crearResultado.php');
}