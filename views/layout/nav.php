<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?DaftarKeluhan">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pengaduan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kelola Data Keluhan
            </div>

            <!-- Nav Item - Charts -->
            <li <?=$tittle == 'Daftar Keluhan' ? 'class="nav-item active"':'class="nav-item"'?>>
                <a class="nav-link" href="?DaftarKeluhan">
                    <i class="fas fa-fw fa-sticky-note"></i>
                    <span>Data Keluhan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li <?=$tittle == 'Daftar Kritik Saran' ? 'class="nav-item active"':'class="nav-item"'?>>
                <a class="nav-link" href="?DaftarKritikSaran">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Data Kritik & Saran</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <a href="?Logout" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"  style="margin-right: 30px;padding: 5px 25px 5px 25px;">Logout</a>
                    </ul>
                    <!-- Topbar Navbar -->
                    <!-- <ul class="navbar-nav ml-auto"> -->

                        <!-- Nav Item - User Information -->
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">nama admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a> -->
                            <!-- Dropdown - User Information -->
                            <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul> -->

                </nav>
                <!-- End of Topbar -->