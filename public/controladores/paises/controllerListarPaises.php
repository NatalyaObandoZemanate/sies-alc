<?php

//include '../../configuracion.php';

$sql_paises= "SELECT * from pais";
$query_paises = $pdo->prepare($sql_paises);
$query_paises->execute();
$datos_paises= $query_paises->fetchAll(PDO::FETCH_ASSOC);