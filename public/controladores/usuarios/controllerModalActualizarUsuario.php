<?php

include ('../../configuracion.php');

$pk_id_usuario = $_POST['pk_id_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$identificacion_usuario = $_POST['identificacion_usuario'];
$telefono_usuario = $_POST['telefono_usuario'];
$email_usuario = $_POST['email_usuario'];
$fk_id_rol = $_POST['fk_id_rol'];
$usu_mod_usu = $_POST['session_pk_id_usuario'];

$sentencia = $pdo->prepare("UPDATE tbl_usuario SET nombre_usuario='$nombre_usuario', identificacion_usuario='$identificacion_usuario',  telefono_usuario='$telefono_usuario', email_usuario='$email_usuario', fk_id_rol='$fk_id_rol' WHERE pk_id_usuario='$pk_id_usuario'");
if ($sentencia->execute()) {
  session_start();
  $_SESSION['mensaje']= "El usuario ha sido actualizado correctamente.";
  $_SESSION['icono']= "success";
?>
<script>
    location.href="<?php echo $URL?>/interfaces/usuarios/index.php";
</script>
<?php
} else {
  session_start();
  $_SESSION['mensaje']= "Error, no fue posible actualizar los datos.";
  $_SESSION['icono']= "error";
  ?>
  <script>
    location.href="<?php echo $URL?>/interfaces/usuarios/index.php";
  </script>
  <?php
}