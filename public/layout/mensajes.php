<?php

//Se definen el popUp de muestra de confirmación o error según los parámetros que se envíe desde cada interfaz

if( (isset($_SESSION['mensaje'])) && (isset($_SESSION['icono']))){
    $mensaje = $_SESSION['mensaje'];
    $icono = $_SESSION['icono'];
?>
    <script>
        Swal.fire({
            position: "center",
            icon: "<?php echo $icono?>",
            text: "<?php echo $mensaje?>",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php
    unset($_SESSION['mensaje']);

}
?>