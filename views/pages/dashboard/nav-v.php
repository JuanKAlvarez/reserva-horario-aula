        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.html" class="brand-link">
            <img src="dist/img/Logo_CG.png" alt="Control de Gastos" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Control de Gastos</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="dist/img/JuanAlvarez.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block">Juan Álvarez.</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li  OnClick="ch('pages/dashboard.php')" class="nav-item active">
                    <a  href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                    </a>
                </li>
                <hr class="dropdown-divider">
                <!-- Ingresos -->
                <li class="nav-item">
                    <a href="ingresos.html" class="nav-link">
                    <i class="far fa-star nav-icon"></i>
                    <p>Ingresos</p>
                    </a>
                </li>
                <!-- Gastos -->
                <li class="nav-item">
                    <a href="gastos.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Gastos</p>
                    </a>
                </li>
                <hr class="dropdown-divider">
               <!-- Administración --> 
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Administración
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <!-- Tipo Ingresos -->
                    <li class="nav-item">
                        <a href="pages/forms/validation.html" class="nav-link">
                        <i class="far fa-file nav-icon"></i>
                        <p>Tipo Ingresos</p>
                        </a>
                    </li>
                    <!-- Tipo Gastos -->
                    <li class="nav-item">
                        <a href="pages/forms/validation.html" class="nav-link">
                        <i class="far fa-file nav-icon"></i>
                        <p>Tipo Gastos</p>
                        </a>
                    </li>
                    </ul>
                </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>