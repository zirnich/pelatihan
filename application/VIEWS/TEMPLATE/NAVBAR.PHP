<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="  fas fa-portrait"></i>
        </div>

        <div class="sidebar-brand-text mx-3">cikundul</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/Welcome/admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Main Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
     <!--   <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DATA PASIEN</span></a>
      </li> 
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DATA DOKTER</span></a>
      </li> -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa fa-folder"></i>
          <span>pendaftaran</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
             
            <a class="collapse-item" href="<?php echo base_url('index.php/puskes/data_pendaftaran') ?>">Data pendaftaran</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/puskes/input_pendaftaran') ?>">pendaftaran </a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Pasien</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
             
            <a class="collapse-item" href="<?php echo base_url('index.php/puskes') ?>">Data Pasien</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/puskes/tambah') ?>">Tambah Pasien </a>
          </div>
        </div>
      </li>
     

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
          <i class="fas fa-fw fa-cog"></i>
          <span>Dokter</span>
        </a>
        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
             
            <a class="collapse-item" href="<?php echo base_url('index.php/puskes/data_dokter') ?>">Data Dokter</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/puskes/input_dokter') ?>">Tambah Dokter</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsea" aria-expanded="true" aria-controls="collapsea">
          <i class="fas fa-fw fa-cog"></i>
          <span>Poli</span>
        </a>
        <div id="collapsea" class="collapse" aria-labelledby="headinga" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
             
            <a class="collapse-item" href="<?php echo base_url('index.php/puskes/data_poli') ?>">Data Poli</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/puskes/input_poli') ?>">Tambah Poli</a>
          </div>
        </div>
      </li>


     

     <!-- <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/laporan') ?>">
          <i class="fas fa-fw "></i>
          <span>Laporan</span></a>
      </li> -->

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
        <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
     <!--       <div class="input-group">
              <input type="text" class="form-control bg-dark border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div> -->
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">petugas</span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url('index.php/login/logout') ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->