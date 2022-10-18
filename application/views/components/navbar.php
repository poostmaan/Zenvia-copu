<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion animate__animated animate__fadeInLeft" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15"> 
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Seenvia</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Navegación
    </div>

    <!-- Nav Item - Homepages -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= site_url(); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Homepages</span>
        </a>
    </li>

    <!-- Nav Item - Plantillas -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= site_url('plantillas'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Plantillas</span>
        </a>
    </li>

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= site_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Salir</span>
        </a>
    </li>

    <br>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>