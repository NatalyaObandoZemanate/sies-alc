<?php

$pro_id = $_GET['pro_id'];

//$sentencia = "SELECT * FROM plan_estudios where fk_pro_id='$pro_id'";
$sentencia = "SELECT plan_estudios.per_aca, plan_estudios.cre_aca, programa.nom_pro, programa.sem_pro, asignatura.nom_asi FROM plan_estudios INNER JOIN programa ON plan_estudios.fk_pro_id=programa.pro_id INNER JOIN asignatura ON plan_estudios.fk_asi_id=asignatura.asi_id WHERE fk_pro_id='$pro_id' ORDER BY plan_estudios.per_aca";
//print_r ($sentencia);

$query_planes_estudio = $pdo->prepare($sentencia);
$query_planes_estudio->execute();
$datos_planes_estudio= $query_planes_estudio->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_planes_estudio as $dato_plan_estudio) {
  $per_aca = $dato_plan_estudio['per_aca'];
  $cre_aca = $dato_plan_estudio['cre_aca'];
  $nom_pro = $dato_plan_estudio['nom_pro'];
  $nom_asi = $dato_plan_estudio['nom_asi'];
}
