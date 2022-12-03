        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
            <img src="<?php echo $viewsDistPhat ?>img/Logo_CG.png" alt="Control de Gastos" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Control de Reservas</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="<?php echo $viewsDistPhat ?>img/JuanAlvarez.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block">Juan Álvarez.</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li  OnClick="ch('dashboard')" class="nav-item active">
                    <a  href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                    </a>
                </li>
                <!-- Reservas -->
                <li  OnClick="ch('reservas')" class="nav-item active">
                    <a  href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Reservas</p>
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
                        
                        <!-- Docentes -->
                        <li OnClick="ch('docentes')" class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-star nav-icon"></i>
                            <p>Docentes</p>
                            </a>
                        </li>
                        <!-- Aulas -->
                        <li OnClick="ch('aulas')" class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-star nav-icon"></i>
                            <p>Aulas</p>
                            </a>
                        </li>
                        <!-- Materias -->
                        <li OnClick="ch('materias')" class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-star nav-icon"></i>
                            <p>Materias</p>
                            </a>
                        </li>
                        <!-- Grupos -->
                        <li OnClick="ch('grupos')" class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-star nav-icon"></i>
                            <p>Grupos</p>
                            </a>
                        </li>
                        <!-- Eventos -->
                        <li OnClick="ch('eventos')" class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-star nav-icon"></i>
                            <p>Eventos</p>
                            </a>
                        </li>
                    
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>