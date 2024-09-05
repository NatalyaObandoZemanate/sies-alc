<?php

include ('../../configuracion.php');

$pk_id_institucion = $_POST['pk_id_institucion'];
$nombre_institucion = $_POST['nombre_institucion'];
$asi_id = $_POST['asi_id'];
$nom_asi = $_POST['nom_asi'];
$cod_asi = $_POST['cod_asi'];
$usu_mod_asi = $_POST['usu_mod_asi'];

$sentencia = $pdo->prepare("UPDATE asignatura SET nom_asi='$nom_asi', cod_asi='$cod_asi', fec_mod_asi='$fechaHora', usu_mod_asi='$usu_mod_asi' WHERE asi_id='$asi_id'");
if ($sentencia->execute()) {
  session_start();
  $_SESSION['mensaje']= "La asignatura ha sido actualizada correctamente.";
  $_SESSION['icono']= "success";
?>
<script>
    location.href= "<?php echo $URL?>/interfaces/asignaturas/index.php?pk_id_institucion=<?php echo $pk_id_institucion?>&nombre_institucion=<?php echo $nombre_institucion?>";
</script>
<?php
} else {
  session_start();
  $_SESSION['mensaje']= "Error, no fue posible actualizar los datos.";
  $_SESSION['icono']= "error";
  ?>
  <script>
    location.href="<?php echo $URL?>/interfaces/asignaturas/index.php?pk_id_institucion=<?php echo $pk_id_institucion?>&nombre_institucion=<?php echo $nombre_institucion?>";
  </script>
  <?php
}