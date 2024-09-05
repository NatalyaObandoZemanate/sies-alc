<?php

include ('../../configuracion.php');

$asi_id = $_GET['asi_id'];

$sql_asignatura= "DELETE FROM asignatura WHERE asi_id = '$asi_id'";

$query_asignatura= $pdo->prepare($sql_asignatura);
$query_asignatura->execute();
$datos_asignatura= $query_asignatura->fetchAll(PDO::FETCH_ASSOC);

header('Location: '.$URL.'/interfaces/instituciones/index.php');