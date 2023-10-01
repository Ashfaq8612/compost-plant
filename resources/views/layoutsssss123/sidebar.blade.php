<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Compost<sup>2.o</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

 <!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-chart-bar"></i> <!-- Replace "fa-chart-bar" with your desired icon -->
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('waste_intakes.index') }}">
      <i class="fas fa-fw fa-recycle"></i> <!-- Replace "fa-recycle" with your desired icon -->
      <span>Waste Intakes</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('plant_operations.index') }}">
      <i class="fas fa-fw fa-industry"></i> <!-- Replace "fa-industry" with your desired icon -->
      <span>Plant Operations</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('screen_combustible.index') }}">
      <i class="fas fa-fw fa-fire"></i> <!-- Replace "fa-fire" with your desired icon -->
      <span>Screen Combustible</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('human_resource.index') }}">
      <i class="fas fa-fw fa-users"></i> <!-- Replace "fa-users" with your desired icon -->
      <span>Human Resource</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('windrows_installation.index') }}">
      <i class="fas fa-fw fa-users"></i> <!-- Replace "fa-users" with your desired icon -->
      <span>Windrows Installations</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('lab_analysis.index') }}">
      <i class="fas fa-fw fa-recycle"></i> <!-- Replace "fa-users" with your desired icon -->
      <span>Lab Analysis</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('sieving-units.index') }}">
      <i class="fas fa-fw fa-recycle"></i> <!-- Replace "fa-users" with your desired icon -->
      <span>Sieving Units</span>
    </a>
  </li>
 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-archive"></i>
      <span>Inventories</span>
    </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{ route('inventories.index') }}">Bulk</a>
      <a class="dropdown-item" href="{{ route('inventories5kg.index') }}">5KG</a>
      <a class="dropdown-item" href="{{ route('inventories20kg.index') }}">20KG</a>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-user-circle"></i> <!-- Replace "fa-user-circle" with your desired icon -->
      <span>Profile</span>
    </a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>


</ul>
