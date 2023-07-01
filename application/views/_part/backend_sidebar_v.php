<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-text mx-3">PT Nippisun Indonesia</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php if ($this->session->userdata('level') == 1) : ?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?= ($this->uri->segment(1) == "admin" ? 'active' : '') ?>">
        <a class="nav-link" href="<?= site_url('admin'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <?php if ($this->session->userdata('level') == 1) : ?>

      <li class="nav-item <?= ($this->uri->segment(1) == "pemasok" ? 'active' : '') ?>">
        <a class="nav-link" href="<?= site_url('pemasok'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Pemasok</span></a>
      </li>

      <li class="nav-item <?= ($this->uri->segment(1) == "pelanggan" ? 'active' : '') ?>">
        <a class="nav-link" href="<?= site_url('pelanggan'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Pelanggan</span></a>
      </li>

      <li class="nav-item <?= ($this->uri->segment(1) == "barang" ? 'active' : '') ?>">
        <a class="nav-link" href="<?= site_url('barang'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Barang</span></a>
      </li>

      <li class="nav-item <?= ($this->uri->segment(1) == "barangmasuk" ? 'active' : '') ?>">
        <a class="nav-link" href="<?= site_url('barangmasuk'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Barang Masuk</span></a>
      </li>

      <li class="nav-item <?= ($this->uri->segment(1) == "barangkeluar" ? 'active' : '') ?>">
        <a class="nav-link" href="<?= site_url('barangkeluar'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Barang Keluar</span></a>
      </li>

      <li class="nav-item <?= ($this->uri->segment(1) == "stokbarang" ? 'active' : '') ?>">
        <a class="nav-link" href="<?= site_url('stokbarang'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Data Stok Barang</span></a>
      </li>
    <?php endif; ?>

    <?php if ($this->session->userdata('level') == 2 || $this->session->userdata('level') == 1) : ?>
      <li class="nav-item <?= ($this->uri->segment(1) == "permintaanbarang" ? 'active' : '') ?>">
        <a class="nav-link" href="<?= site_url('permintaanbarang'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Permintaan Barang</span></a>
      </li>
    <?php endif; ?>


    <?php if ($this->session->userdata('level') == 3) : ?>
      <li class="nav-item <?= ($this->uri->segment(1) == "user" ? 'active' : '') ?>">
        <a class="nav-link" href="<?= site_url('user'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Manajemen User</span></a>
      </li>

      <li class="nav-item <?= ($this->uri->segment(1) == "laporan" ? 'active' : '') ?>">
        <a class="nav-link" href="<?= site_url('laporan'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Laporan</span></a>
      </li>
    <?php endif; ?>

    <!-- <div class="sidebar-heading">
      Interface
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Custom Components:</h6>
          <a class="collapse-item" href="<?= site_url('admin/button'); ?>">Buttons</a>
          <a class="collapse-item" href="<?= site_url('admin/card'); ?>">Cards</a>
        </div>
      </div>
    </li> -->

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Custom Utilities:</h6>
          <a class="collapse-item" href="<?= site_url('admin/color'); ?>">Colors</a>
          <a class="collapse-item" href="<?= site_url('admin/border'); ?>">Borders</a>
          <a class="collapse-item" href="<?= site_url('admin/animation'); ?>">Animations</a>
          <a class="collapse-item" href="<?= site_url('admin/other'); ?>">Other</a>
        </div>
      </div>
    </li> -->

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
      Addons
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Login Screens:</h6>
          <a class="collapse-item" href="<?= site_url('auth'); ?>">Login</a>
          <a class="collapse-item" href="<?= site_url('auth/register'); ?>">Register</a>
          <a class="collapse-item" href="<?= site_url('auth/forgotpass'); ?>">Forgot Password</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Other Pages:</h6>
          <a class="collapse-item" href="<?= site_url('admin/error'); ?>">404 Page</a>
          <a class="collapse-item" href="<?= site_url('admin/blank'); ?>">Blank Page</a>
        </div>
      </div>
    </li> -->

    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
      <a class="nav-link" href="<?= site_url('admin/chart'); ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
    </li> -->

    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
      <a class="nav-link" href="<?= site_url('admin/table'); ?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li> -->

    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->

  </ul>
  <!-- End of Sidebar -->