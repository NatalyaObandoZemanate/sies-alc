<?php

$ide_pro_id = $_GET['ide_pro_id'];

$sql_tipos= "SELECT * FROM identificacion_programa WHERE ide_pro_id='$ide_pro_id'";
print_r ($sql_tipos);
/*
$sql_institucion= "SELECT i.codigo_institucion, i.nombre_institucion, p.nombre_pais, e.nombre_estado, c.nombre_ciudad, i.telefono_institucion, i.email_institucion FROM institucion i JOIN pais p ON i.fk_id_pais = p.pk_id_pais JOIN estado e ON i.fk_id_estado = e.codigo_estado JOIN ciudad c ON i.fk_id_ciudad = c.pk_id_ciudad WHERE pk_id_institucion = '$pk_id_institucion'";
//print_r ($sql_institucion);
$query_institucion= $pdo->prepare($sql_institucion);
$query_institucion->execute();
$datos_instituciones= $query_institucion->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_instituciones as $dato_institucion) {
    $codigo_institucion = $dato_institucion['codigo_institucion'];
    $nombre_institucion = $dato_institucion['nombre_institucion'];
    $nombre_pais = $dato_institucion['nombre_pais'];
    $nombre_estado = $dato_institucion['nombre_estado'];
    $nombre_ciudad = $dato_institucion['nombre_ciudad'];
    $telefono_institucion = $dato_institucion['telefono_institucion'];
    $email_institucion = $dato_institucion['email_institucion'];
}
*/