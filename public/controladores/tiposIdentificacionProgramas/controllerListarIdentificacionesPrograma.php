<?php

$sql_identificacion_programas= "SELECT * from identificacion_programa";
$query_identificacion_programas= $pdo->prepare($sql_identificacion_programas);
$query_identificacion_programas->execute();
$datos_identificacion_programas= $query_identificacion_programas->fetchAll(PDO::FETCH_ASSOC);