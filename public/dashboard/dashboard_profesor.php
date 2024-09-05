<?php

include './controladores/instituciones/controllerListaInstituciones.php';

?>

<!-- Dashboard para los usuarios registrados como Directores -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Tarjeta de instituciones -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-gradient-blue">
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
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->