<?php

include '../../configuracion.php';

$fk_codigo_estado = $_GET['fk_codigo_estado'];

$sql_ciudades= "SELECT * FROM cat_ciudad WHERE fk_codigo_estado = '$fk_codigo_estado'";
print_r ($sql_ciudades);

$query_ciudades= $pdo->prepare($sql_ciudades);
$query_ciudades->execute();
$datos_ciudades= $query_ciudades->fetchAll(PDO::FETCH_ASSOC);

echo "<option value='' disabled selected>Seleccione la ciudad</option>";

foreach ($datos_ciudades as $dato_ciudad) {
    echo "<option value='{$dato_ciudad['codigo_ciudad']}'>{$dato_ciudad['nombre_ciudad']}</option>";
}
?>

