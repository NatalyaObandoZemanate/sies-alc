<?php

$fk_pk_id_institucion = $_GET['pk_id_institucion'];

//$sql_programas = "SELECT * FROM programa where fk_pk_id_institucion='$fk_pk_id_institucion'";
$sql_programas = "SELECT * FROM programa JOIN institucion ON institucion.pk_id_institucion = programa.fk_pk_id_institucion where fk_pk_id_institucion='$fk_pk_id_institucion'";
//print_r ($sql_programas);
$query_programas = $pdo->prepare($sql_programas);
$query_programas->execute();
$datos_programas = $query_programas->fetchAll(PDO::FETCH_ASSOC);

$sql_institucion = "SELECT * FROM institucion where pk_id_institucion='$fk_pk_id_institucion'";
//print_r ($sql_institucion);
$query_instituciones = $pdo->prepare($sql_institucion);
$query_instituciones->execute();
$datos_instituciones= $query_instituciones->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_instituciones as $dato_institucion) {
  $nom_ins = $dato_institucion['nom_ins'];
}