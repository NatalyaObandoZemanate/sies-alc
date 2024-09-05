<?php

$pk_id_institucion = $_GET['pk_id_institucion'];

//$sql_institucion= "SELECT i.fk_tip_codigo_institucion, i.codigo_institucion, i.nombre_institucion, p.nombre_pais, e.nombre_estado, c.nombre_ciudad, i.telefono_institucion, i.email_institucion, p.pk_id_pais, ii.tip_codigo_institucion FROM institucion i JOIN tbl_sede_institucion s ON i.pk_id_institucion = s.fk_id_institucion JOIN pais p ON i.fk_id_pais = p.pk_id_pais JOIN estado e ON i.fk_id_estado = e.codigo_estado JOIN ciudad c ON i.fk_id_ciudad = c.pk_id_ciudad JOIN cat_identificacion_institucion ii ON i.fk_tip_codigo_institucion = ii.ide_pk_id_institucion WHERE pk_id_institucion = '$pk_id_institucion'";

$sql_institucion= "SELECT * FROM tbl_institucion i JOIN tbl_sede_institucion s ON i.pk_id_institucion = s.fk_id_pais JOIN cat_pais p ON s.fk_id_pais = p.pk_id_pais JOIN cat_estado e ON s.fk_codigo_estado = e.codigo_estado JOIN cat_ciudad c ON s.fk_codigo_ciudad = c.codigo_ciudad WHERE pk_id_institucion = '$pk_id_institucion'";
/*
$sql_institucion= "SELECT i.fk_tip_codigo_institucion, i.codigo_institucion, i.nombre_institucion, i.telefono_institucion, i.email_institucion, p.nombre_pais, p.pk_id_pais, ii.ide_pk_id_institucion, ii.tip_codigo_institucion, e.nombre_estado, e.codigo_estado, c.nombre_ciudad, c.pk_id_ciudad FROM institucion i JOIN pais p ON i.fk_id_pais = p.pk_id_pais JOIN cat_identificacion_institucion ii ON i.fk_tip_codigo_institucion = ii.ide_pk_id_institucion JOIN tbl_estado e ON i.fk_codigo_estado = e.codigo_estado JOIN tbl_ciudad c ON i.fk_id_ciudad = c.pk_id_ciudad WHERE pk_id_institucion = '$pk_id_institucion'";
*/
print_r ($sql_institucion);
/*
$query_institucion= $pdo->prepare($sql_institucion);
$query_institucion->execute();
$datos_instituciones= $query_institucion->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_instituciones as $dato_institucion) {
    $tip_codigo_institucion = $dato_institucion['tip_codigo_institucion'];
    $codigo_institucion = $dato_institucion['codigo_institucion'];
    $nombre_institucion = $dato_institucion['nombre_institucion'];
    $nombre_pais = $dato_institucion['nombre_pais'];
    $nombre_estado = $dato_institucion['nombre_estado'];
    $nombre_ciudad = $dato_institucion['nombre_ciudad'];
    $telefono_institucion = $dato_institucion['telefono_institucion'];
    $email_institucion = $dato_institucion['email_institucion'];
}
    */