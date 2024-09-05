<?php

include ('../../configuracion.php');

$ide_pk_id_institucion = $_GET['ide_pk_id_institucion'];

$sentencia= "DELETE FROM cat_identificacion_institucion WHERE ide_pk_id_institucion= '$ide_pk_id_institucion'";
$query_tipo= $pdo->prepare($sentencia);
$query_tipo->execute();
$datos_tipos= $query_tipo->fetchAll(PDO::FETCH_ASSOC);

header('Location: '.$URL.'/interfaces/tiposIdentificacionInstituciones/index.php');