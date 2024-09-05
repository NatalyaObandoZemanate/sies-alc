<?php

$pro_id = $_GET['pro_id'];

$sql_programas= "SELECT * FROM programa INNER JOIN institucion ON programa.fk_pk_id_institucion=institucion.pk_id_institucion WHERE programa.pro_id='$pro_id'";
$query_programas= $pdo->prepare($sql_programas);
$query_programas->execute();
$datos_programas= $query_programas->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_programas as $dato_programa) {
    $pro_id = $dato_programa['pro_id'];
    $ide_pro = $dato_programa['ide_pro'];
    $nom_pro = $dato_programa['nom_pro'];
    $per_egr = $dato_programa['per_egr'];
    $nombre_institucion = $dato_programa['nombre_institucion'];
    $cre_pro = $dato_programa['cre_pro'];
    $sem_pro = $dato_programa['sem_pro'];
    $pk_id_institucion = $dato_programa['pk_id_institucion'];
}
