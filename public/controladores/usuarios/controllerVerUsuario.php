<?php

$pk_id_usuario = $_GET['pk_id_usuario'];

$sql_usuario= "SELECT tbl_usuario.pk_id_usuario, tbl_usuario.identificacion_usuario, tbl_usuario.nombre_usuario, tbl_usuario.telefono_usuario, tbl_usuario.email_usuario, tbl_rol.nombre_rol from tbl_usuario INNER JOIN tbl_rol ON tbl_usuario.fk_id_rol = tbl_rol.pk_id_rol WHERE tbl_usuario.pk_id_usuario= '$pk_id_usuario'";
$query_usuario= $pdo->prepare($sql_usuario);
$query_usuario->execute();
$datos_usuario= $query_usuario->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_usuario as $dato_usuario) {
    $identificacion_usuario = $dato_usuario['identificacion_usuario'];
    $nombre_usuario = $dato_usuario['nombre_usuario'];
    $nombre_rol = $dato_usuario['nombre_rol'];
    $telefono_usuario = $dato_usuario['telefono_usuario'];
    $email_usuario = $dato_usuario['email_usuario'];
}
