<?php

$pk_id_rol = $_GET['pk_id_rol'];

$sql_rol= "SELECT * FROM tbl_rol WHERE pk_id_rol= '$pk_id_rol'";
$query_rol= $pdo->prepare($sql_rol);
$query_rol->execute();
$datos_rol= $query_rol->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_rol as $dato_rol) {
    $pk_id_rol = $dato_rol['pk_id_rol'];
    $nombre_rol = $dato_rol['nombre_rol'];
    $descripcion_rol = $dato_rol['descripcion_rol'];
}
