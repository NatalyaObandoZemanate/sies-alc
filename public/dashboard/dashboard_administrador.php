<?php

include './controladores/instituciones/controllerListaInstituciones.php';

?>

<!-- Dashboard para los usuarios registrados como Administradores -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- Tarjeta de usuarios -->
        <div class="col-lg-3 col-6">
            <div class="small-box">
                <div class="inner">
                    <?php
                    $contador=0;
                    foreach ($datos_usuarios as $dato_usuario) {
                        $contador = $contador + 1;
                    }
                    ?>
                    <h3><?php echo $contador?></h3>
                    <p>Usuarios</p>
                </div>
                <a href="<?php echo $URL?>/interfaces/usuarios/crearUsuario.php" title="Crear usuario">
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                </a>
                <a href="<?php echo $URL?>/interfaces/usuarios/index.php" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- Tarjeta de instituciones -->
        <div class="col-lg-3 col-6">
            <div class="small-box">
                <div class="inner">
                    <?php
                    $contador=0;
                    foreach ($datos_instituciones as $dato_institucion) {
                        $contador = $contador + 1;
                    }
                    ?>
                    <h3><?php echo $contador?></h3>
                    <p>Instituciones</p>
                </div>
                <a href="<?php echo $URL?>/interfaces/instituciones/crearInstitucion.php" title="Crear Institución">
                    <div class="icon">
                        <i class="fas fa-building"></i>
                    </div>
                </a>
                <a href="<?php echo $URL?>/interfaces/instituciones/index.php" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- Tarjeta de roles -->
        <div class="col-lg-3 col-6">
            <div class="small-box">
                <div class="inner">
                    <?php
                    $contador=0;
                    foreach ($datos_roles as $dato_rol) {
                        $contador = $contador + 1;
                    }
                    ?>
                    <h3><?php echo $contador?></h3>
                    <p>Roles</p>
                </div>
                <a href="<?php echo $URL?>/interfaces/roles/crearRol.php"  title="Crear rol">
                    <div class="icon">
                        <i class="fas fa-plus"></i>
                    </div>
                </a>
                <a href="<?php echo $URL?>/interfaces/roles/index.php" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- Tarjeta de programas -->
        <div class="col-lg-3 col-6">
            <div class="small-box">
                <div class="inner">
                    <?php
                    $contador=0;
                    foreach ($datos_programas as $dato_programa) {
                        $contador = $contador + 1;
                    }
                    ?>
                    <h3><?php echo $contador?></h3>
                    <p>Programas</p>
                </div>
                <a href="#">
                    <div class="icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </a>
                <a href="<?php echo $URL?>/interfaces/programas/index.php" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->