<?php

if ($session_nombre_rol=='Administrador') {
  $sql_instituciones= "SELECT * FROM tbl_institucion";
} else {
  $sql_instituciones = "SELECT * FROM tbl_institucion i JOIN tblpais p ON i.fk_id_pais = p.pk_id_pais JOIN estado e ON i.fk_codigo_estado = e.codigo_estado JOIN ciudad c ON i.fk_id_ciudad = c.pk_id_ciudad JOIN usuario_institucion ui ON i.pk_id_institucion = ui.fk_pk_id_institucion JOIN tbl_usuario u ON ui.fk_pk_id_usuario = u.pk_id_usuario WHERE u.pk_id_usuario = '$session_pk_id_usuario'";
}

$query_instituciones= $pdo->prepare($sql_instituciones);
$query_instituciones->execute();
$datos_instituciones= $query_instituciones->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_instituciones as $dato_institucion) {
  $pk_id_institucion = $dato_institucion['pk_id_institucion'];
  $nombre_institucion = $dato_institucion['nombre_institucion'];
}