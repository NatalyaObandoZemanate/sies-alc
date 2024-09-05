<?php

include ('../../configuracion.php');

$pk_id_usuario = $_GET['pk_id_usuario'];

$sql_usuario= "DELETE FROM tbl_usuario WHERE pk_id_usuario= '$pk_id_usuario'";
$query_usuario= $pdo->prepare($sql_usuario);
$query_usuario->execute();
$datos_usuario= $query_usuario->fetchAll(PDO::FETCH_ASSOC);

header('Location: '.$URL.'/interfaces/usuarios/index.php');