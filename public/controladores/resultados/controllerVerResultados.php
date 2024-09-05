<?php

$fk_pro_id = $_GET['pro_id'];

$query= $pdo->prepare("SELECT COUNT(*) AS countIdPro FROM resultado WHERE fk_pro_id = $fk_pro_id");
$query->execute();
$datos_query = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_query as $dato_query){
    $countIdPro = $dato_query['countIdPro'];
}

if ($countIdPro>0) {
    $sql_resultados= "SELECT institucion.pk_id_institucion, institucion.nombre_institucion, programa.pro_id, programa.nom_pro, programa.per_egr, resultado.rap_id, resultado.des_rap FROM institucion JOIN programa ON institucion.pk_id_institucion = programa.fk_pk_id_institucion JOIN resultado ON programa.pro_id = resultado.fk_pro_id WHERE fk_pro_id='$fk_pro_id'";
    $query_resultados= $pdo->prepare($sql_resultados);
    $query_resultados->execute();
    $datos_resultados= $query_resultados->fetchAll(PDO::FETCH_ASSOC);

    foreach ($datos_resultados as $dato_resultado) {
        $rap_id = $dato_resultado['rap_id'];
        $pk_id_institucion = $dato_resultado['pk_id_institucion'];
        $nombre_institucion = $dato_resultado['nombre_institucion'];
        $pro_id = $dato_resultado['pro_id'];
        $nom_pro = $dato_resultado['nom_pro'];
        $per_egr = $dato_resultado['per_egr'];
        $des_rap = $dato_resultado['des_rap'];
    }
} else {
    $sql_resultados= "SELECT institucion.pk_id_institucion, institucion.nombre_institucion, programa.pro_id, programa.nom_pro FROM institucion INNER JOIN programa ON institucion.pk_id_institucion = programa.fk_pk_id_institucion WHERE programa.pro_id ='$fk_pro_id'";
    $query_resultados= $pdo->prepare($sql_resultados);
    $query_resultados->execute();
    $datos_resultados= $query_resultados->fetchAll(PDO::FETCH_ASSOC);

    foreach ($datos_resultados as $dato_resultado) {
        $pk_id_institucion = $dato_resultado['pk_id_institucion'];
        $nombre_institucion = $dato_resultado['nombre_institucion'];
        $pro_id = $dato_resultado['pro_id'];
        $nom_pro = $dato_resultado['nom_pro'];
    }
}