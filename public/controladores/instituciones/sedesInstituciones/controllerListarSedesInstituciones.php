<?php

$fk_id_institucion = $_GET['pk_id_institucion'];
$nombre_institucion = $_GET['nombre_institucion'];

$sql_sedes = "SELECT * FROM tbl_sede_institucion sede JOIN tbl_institucion institucion ON institucion.pk_id_institucion = sede.fk_id_institucion where fk_id_institucion='$fk_id_institucion'";
//print_r($sql_sedes);

$query_sedes = $pdo->prepare($sql_sedes);
$query_sedes->execute();
$datos_sedes = $query_sedes->fetchAll(PDO::FETCH_ASSOC);
/*
$sql_institucion = "SELECT * FROM tbl_institucion where pk_id_institucion='$fk_id_institucion'";
print_r($sql_institucion);

$query_instituciones = $pdo->prepare($sql_institucion);
$query_instituciones->execute();
$datos_instituciones= $query_instituciones->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_instituciones as $dato_institucion) {
  $nombre_institucion = $dato_institucion['nombre_institucion'];
}
*/