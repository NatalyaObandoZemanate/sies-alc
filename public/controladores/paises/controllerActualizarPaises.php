<?php

include '../../configuracion.php';

echo $nombre_pais = $_GET['nombre_pais'];
echo $pais_id = $_GET['pais_id'];

$sql_paises= "SELECT * FROM pais";
$query_paises= $pdo->prepare($sql_paises);
$query_paises->execute();
$datos_paises= $query_paises->fetchAll(PDO::FETCH_ASSOC);

echo "<option value='<?php$pais_id' selected>$nombre_pais</option>";

foreach ($datos_paises as $dato_pais) {
    echo "<option value='{$dato_pais['pk_id_pais']}'>{$dato_pais['nombre_pais']}</option>";
}
?>
