<?php

$pro_id = $_GET['pro_id'];

$sql_semestres = "SELECT * FROM programa where pro_id='$pro_id'";

$query_semestres = $pdo->prepare($sql_semestres);
$query_semestres->execute();
$datos_semestres = $query_semestres->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_semestres as $dato_semestre) {
  $nom_pro = $dato_semestre['nom_pro'];
  $sem_pro = $dato_semestre['sem_pro'];
}