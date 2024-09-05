<?php

$sql_programas= "SELECT * FROM tbl_programa";
$query_programas= $pdo->prepare($sql_programas);
$query_programas->execute();
$datos_programas= $query_programas->fetchAll(PDO::FETCH_ASSOC);