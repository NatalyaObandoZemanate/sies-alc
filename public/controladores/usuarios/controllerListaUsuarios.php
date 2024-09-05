<?php

$sql_usuarios= "SELECT tbl_usuario.pk_id_usuario, tbl_usuario.identificacion_usuario, tbl_usuario.nombre_usuario, tbl_usuario.telefono_usuario, tbl_usuario.email_usuario, tbl_rol.nombre_rol from tbl_usuario INNER JOIN tbl_rol ON tbl_usuario.fk_id_rol = tbl_rol.pk_id_rol;";
$query_usuarios= $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$datos_usuarios= $query_usuarios->fetchAll(PDO::FETCH_ASSOC);