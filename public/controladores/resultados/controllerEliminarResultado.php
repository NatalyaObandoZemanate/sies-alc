<?php

include ('../../configuracion.php');

$rap_id = $_GET['rap_id'];
$pro_id =$_GET['pro_id'];

$sql_resultados= "DELETE FROM resultado WHERE rap_id= '$rap_id'";
$query_resultados= $pdo->prepare($sql_resultados);
$query_resultados->execute();
$datos_resultados= $query_resultados->fetchAll(PDO::FETCH_ASSOC);
header('Location: '.$URL.'/interfaces/resultados/index.php?pro_id='.$pro_id);
