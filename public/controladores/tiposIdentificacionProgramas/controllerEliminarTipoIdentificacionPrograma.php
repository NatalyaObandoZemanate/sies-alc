<?php

include ('../../configuracion.php');

$ide_pro_id = $_GET['ide_pro_id'];

$sentencia= "DELETE FROM identificacion_programa WHERE ide_pro_id= '$ide_pro_id'";
$query_tipo= $pdo->prepare($sentencia);
$query_tipo->execute();
$datos_tipos= $query_tipo->fetchAll(PDO::FETCH_ASSOC);

header('Location: '.$URL.'/interfaces/tiposIdentificacionProgramas/index.php');