<?php

//Se realiza la validación del primer ingreso al sistema
$consulta_primer_ingreso = $pdo->prepare("SELECT primer_ingreso FROM tbl_usuario WHERE pk_id_usuario = ?");
$consulta_primer_ingreso->execute([$session_pk_id_usuario]);
$resultado = $consulta_primer_ingreso->fetch(PDO::FETCH_ASSOC);

if ($resultado && $resultado['primer_ingreso'] === 0) {
    // En el primer inicio de sesión del usuario se sugiere la modificación de la contraseña
    ?>
    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: true
        });
        swalWithBootstrapButtons.fire({
            title: "¿Desea cambiar su contraseña?",
            text: "¡Actualemente su contraseña es su identificación!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "¡Sí, cambiar!",
            cancelButtonText: "¡No, continuar!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location="<?php echo $URL ?>/interfaces/usuarios/actualizarContrasena.php?pk_id_usuario="+<?php echo $session_pk_id_usuario ?>;
                swalWithBootstrapButtons.fire({
                    title: "¡Contraseña actualizada!",
                    text: "La contraseña se actualizó correctamente",
                    icon: "success"
                });
            } else if (result.dismiss === Swal.DismissReason.cancel){
                swalWithBootstrapButtons.fire({
                    title: "Cancelado",
                    text: "Su contraseña continúa siendo su identificación.",
                    icon: "error"
                });
            }
        });
    </script>
    <?php
} else {
    // Inicio de sesión regular
}

?>