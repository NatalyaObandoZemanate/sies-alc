<?php

include ('../../configuracion.php');

$pk_id_rol = $_POST['pk_id_rol'];
$nombre_rol = $_POST['nombre_rol'];
$descripcion_rol = $_POST['descripcion_rol'];

$sentencia = $pdo->prepare("UPDATE tbl_rol SET nombre_rol='$nombre_rol', descripcion_rol='$descripcion_rol' WHERE pk_id_rol='$pk_id_rol'");

if ($sentencia->execute()) {
  session_start();
  $_SESSION['mensaje']= "El rol ha sido actualizado correctamente.";
  $_SESSION['icono']= "success";
?>
<script>
    location.href="<?php echo $URL?>/interfaces/roles/index.php";
</script>
<?php
} else {
  session_start();
  $_SESSION['mensaje']= "Error, no fue posible actualizar los datos.";
  $_SESSION['icono']= "error";
  ?>
  <script>
    location.href="<?php echo $URL?>/interfaces/roles/index.php";
  </script>
  <?php
}