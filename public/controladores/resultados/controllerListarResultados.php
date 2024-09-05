<?php

$fk_pro_id = $_GET['pro_id'];

$sql_resultados = "SELECT institucion.nombre_institucion, programa.nom_pro, programa.per_egr, resultados.des_rap FROM institucion JOIN programa ON institucion.pk_id_institucion = programa.fk_pk_id_institucion JOIN resultado ON programa.pro_id = resultado.fk_pro_id WHERE fk_pro_id=$fk_pro_id";
$query_resultados= $pdo->prepare($sql_resultados);
print_r($query_resultados);
$query_resultados->execute();
$query_resultados= $query_resultados->fetchAll(PDO::FETCH_ASSOC);