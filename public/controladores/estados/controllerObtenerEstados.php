<?php

include '../../configuracion.php';

$fk_id_pais = $_GET['fk_id_pais'];

$sql_estados= "SELECT * FROM cat_estado WHERE fk_id_pais = '$fk_id_pais'";
$query_estados= $pdo->prepare($sql_estados);
$query_estados->execute();
$datos_estados= $query_estados->fetchAll(PDO::FETCH_ASSOC);

echo ($sql_estados);

echo "<option value='' disabled selected>Seleccione el estado</option>";

foreach ($datos_estados as $dato_estado) {
    echo "<option value='{$dato_estado['codigo_estado']}'>{$dato_estado['nombre_estado']}</option>";
}
?>