<?php

include '../../configuracion.php';

$pro_id = $_GET['pro_id'];
$pk_id_institucion = $_GET['pk_id_institucion'];

$sql_programa= "DELETE FROM programa WHERE pro_id= '$pro_id'";
$query_programa= $pdo->prepare($sql_programa);
//print_r ($query_programa);
$query_programa->execute();
$datos_programas= $query_programa->fetchAll(PDO::FETCH_ASSOC);
header('Location: '.$URL.'/interfaces/programas/index.php?pk_id_institucion='.$pk_id_institucion);