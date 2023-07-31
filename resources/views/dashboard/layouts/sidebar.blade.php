<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Dashboard <sup>1</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
      <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item {{ Request::is('dashboard/pegawai/*') ? 'active' : '' }}">
      <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseTwo"
          aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-solid fa-user"></i>
          <span>Pegawai</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2  collapse-inner rounded">
              <a class="collapse-item" href="/dashboard/pegawai/driver">Driver</a>
              <a class="collapse-item" href="/dashboard/pegawai/pengawas">Pengawas</a>
          </div>
      </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item {{ Request::is('dashboard/kendaraan') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard/kendaraan">
      <i class="fas fa-solid fa-car"></i>
        <span>Kendaraan</span></a>
  </li>
  <li class="nav-item {{ Request::is('dashboard/laporan') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard/laporan">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Laporan P2h</span></a>
  </li>
  <li class="nav-item {{ Request::is('dashboard/bbm') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard/bbm">
      <i class="fas fa-solid fa-gas-pump"></i>
        <span>BBM</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Laporan
  </div>

  <!-- Nav Item - Pages Collapse Menu -->

  <!-- Nav Item - Charts -->
  <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fas fa-fw fa-table"></i>
          <span>Harian</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
      <a class="nav-link" href="#">
          <i class="fas fa-fw fa-table"></i>
          <span>Bulanan</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-table"></i>
        <span>Tahunan</span></a>
</li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>


</ul>