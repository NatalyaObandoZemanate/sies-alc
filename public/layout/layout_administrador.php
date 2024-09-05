<!-- Sidebar Menu -->
<nav class="mt-2" style="background-color:#2C3E50;">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Módulo de usuarios -->
    <li class="nav-item">
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-users"></i>
        <p>Usuarios<i class="right fas fa-angle-left"></i></p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo $URL?>/interfaces/usuarios/index.php" class="nav-link">
            <i class="fas fa-list nav-icon"></i>
            <p>Lista de usuarios</p>
          </a>
        </li>
      </ul>
    </li>
    <!-- Módulo de roles -->
    <li class="nav-item">
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-address-card"></i>
        <p>Roles<i class="right fas fa-angle-left"></i></p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo $URL?>/interfaces/roles/index.php" class="nav-link">
            <i class="fas fa-list nav-icon"></i>
            <p>Lista de roles</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $URL?>/interfaces/roles/crearRol.php" class="nav-link">
            <i class="fas fa-plus nav-icon"></i>
            <p>Nuevo rol</p>
          </a>
        </li>
      </ul>
    </li>
    <!-- Módulo de instituciones -->
    <li class="nav-item">
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-building  "></i>
        <p>Instituciones<i class="right fas fa-angle-left"></i></p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo $URL?>/interfaces/instituciones/index.php" class="nav-link">
            <i class="fas fa-list nav-icon"></i>
            <p>Lista de instituciones</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $URL?>/interfaces/instituciones/crearInstitucion.php" class="nav-link">
            <i class="fas fa-list nav-icon"></i>
            <p>Crear institución</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $URL?>/interfaces/tiposIdentificacionInstituciones/index.php" class="nav-link">
            <i class="fas fa-list nav-icon"></i>
            <p>Identificación de instituciones</p>
          </a>
        </li>
      </ul>
    </li>
    <!-- Módulo de programas -->
    <li class="nav-item">
      <a href="<?php echo $URL?>/interfaces/programas/index.php" class="nav-link active">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>Programas<i class="right fas fa-angle-left"></i></p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?php echo $URL?>/interfaces/programas/index.php" class="nav-link">
            <i class="fas fa-list nav-icon"></i>
            <p>Lista de programas</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $URL?>/interfaces/tiposIdentificacionProgramas/index.php" class="nav-link">
            <i class="fas fa-list nav-icon"></i>
            <p>Identificación de programas</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->