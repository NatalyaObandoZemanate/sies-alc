<?php

include ('../../configuracion.php');
//include ('../../layout/session.php');

echo $nombre_institucion = $_POST['nombre_institucion'];
echo $nom_asi = $_POST['nom_asi'];
echo $cod_asi = $_POST['cod_asi'];
echo $fk_pk_id_institucion = $_POST['fk_pk_id_institucion'];
echo $usu_mod_asi = $_POST['usu_mod_asi'];

$query= $pdo->prepare("SELECT COUNT(*) as countAsi FROM asignatura WHERE cod_asi = '$cod_asi' AND fk_pk_id_institucion= '$fk_pk_id_institucion'");
$query->execute();
$datos_query = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_query as $dato_query){
    $countAsi = $dato_query['countAsi'];
}

if ($countAsi==0) {
    $sentencia = $pdo->prepare("INSERT INTO asignatura (nom_asi, fk_pk_id_institucion, cod_asi, fec_cre_asi, usu_mod_asi) values ('$nom_asi', '$fk_pk_id_institucion', '$cod_asi', '$fechaHora', '$usu_mod_asi')");
    print_r ($sentencia);
    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje']= "La asignatura ha sido creada correctamente.";
        $_SESSION['icono']= "success";
        ?>
        <script>
            location.href="<?php echo $URL?>/interfaces/asignaturas/index.php?pk_id_institucion=<?php echo $fk_pk_id_institucion?>&nombre_institucion="+<?php echo $nombre_institucion?>;
        </script>
        <?php
    } else {
        session_start();
        $_SESSION['mensaje']= "Error, no fue posible crear la asignatura";
        $_SESSION['icono']= "error";
        ?>
        <script>
            location.href="<?php echo $URL?>/interfaces/asignaturas/index.php?pk_id_institucion=<?php echo $fk_pk_id_institucion?>&nombre_institucion=<?php echo $nombre_institucion?>";
        </script>
        <?php
    }
} else {
    session_start();
    $_SESSION['mensaje']= "Ya se encuetra registrada una asignatura con el código ingresado";
    $_SESSION['icono']= "error";
    ?>
    <script>
        location.href="<?php echo $URL?>/interfaces/asignaturas/index.php?pk_id_institucion=<?php echo $fk_pk_id_institucion?>&nombre_institucion=<?php echo $nombre_institucion?>";
    </script>
    <?php
}
