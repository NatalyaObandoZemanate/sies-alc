<?php

$fk_pk_id_institucion = $_GET['pk_id_institucion'];

$sql_asignaturas = "SELECT * FROM asignatura where fk_pk_id_institucion='$fk_pk_id_institucion'";
$query_asignaturas = $pdo->prepare($sql_asignaturas);
$query_asignaturas->execute();
$datos_asignaturas = $query_asignaturas->fetchAll(PDO::FETCH_ASSOC);