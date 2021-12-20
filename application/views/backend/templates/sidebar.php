<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url("assets/dist") ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SPK | Pegawai</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url("assets/dist") ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">MENU</li>
                <li class="nav-item" active>
                    <a href="<?php echo base_url('home/index')  ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('kriteria/index')  ?>" class="nav-link">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>
                            Criteria Data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('pegawai/index')  ?>" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Employee Data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('penilaian/index') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Valuation
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>