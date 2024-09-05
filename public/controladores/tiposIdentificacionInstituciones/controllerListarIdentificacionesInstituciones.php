<?php

$sql_cat_identificacion_instituciones= "SELECT * from cat_identificacion_institucion";
$query_cat_identificacion_instituciones= $pdo->prepare($sql_cat_identificacion_instituciones);
$query_cat_identificacion_instituciones->execute();
$datos_cat_identificacion_instituciones= $query_cat_identificacion_instituciones->fetchAll(PDO::FETCH_ASSOC);