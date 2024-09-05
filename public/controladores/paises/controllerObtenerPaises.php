<?php

include '../../configuracion.php';

$sql_paises= "SELECT * FROM cat_pais";
$query_paises= $pdo->prepare($sql_paises);
$query_paises->execute();
$datos_paises= $query_paises->fetchAll(PDO::FETCH_ASSOC);

echo "<option value='' disabled selected>Seleccionar país</option>";

foreach ($datos_paises as $dato_pais) {
    echo "<option value='{$dato_pais['pk_id_pais']}'>{$dato_pais['nombre_pais']}</option>";
}
?>