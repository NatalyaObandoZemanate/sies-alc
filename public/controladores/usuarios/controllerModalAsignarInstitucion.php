<?php

include ('../../configuracion.php');

$fk_pk_id_usuario = $_POST['fk_pk_id_usuario'];
$fk_pk_id_institucion = $_POST['fk_pk_id_institucion'];

$sentencia = $pdo->prepare("INSERT INTO usuario_institucion (`fk_pk_id_usuario`, `fk_pk_id_institucion`) VALUES ('$fk_pk_id_usuario','$fk_pk_id_institucion')");
//print_r ($sentencia);
if ($sentencia->execute()) {
  session_start();
  $_SESSION['mensaje']= "Se ha asignado la institución correctamente.";
  $_SESSION['icono']= "success";
  ?>
  <script>
      location.href="<?php echo $URL?>/interfaces/usuarios/index.php";
  </script>
  <?php
} else {
  session_start();
  $_SESSION['mensaje']= "Error, no fue posible asignar la institución.";
  $_SESSION['icono']= "error";
  ?>
  <script>
    location.href="<?php echo $URL?>/interfaces/usuarios/index.php";
  </script>
  <?php
}