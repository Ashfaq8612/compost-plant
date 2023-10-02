
<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i><span class="badge badge-primary float-right">3</span> <span> Dashboard </span>
                    </a>
                </li>

  {{-- <li class="nav-item">
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


<li>
    <a class="waves-effect"><i class="mdi mdi-email"></i><span> Inventory <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
    <ul class="submenu">
        <li><a  href="{{ route('inventories.index') }}">Bulk Inventory</a></li>
        <li><a  href="{{ route('inventories5kg.index') }}">5kg Inventory</a></li>
        <li><a  href="{{ route('inventories20kg.index') }}">20Kg Inventory</a></li>
    </ul>
</li>



<li>
    <a class="waves-effect"><i class="mdi mdi-email"></i><span> Sales <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
    <ul class="submenu">
        <li><a  href="{{ route('bulk_sales.index') }}">Bulk Sales</a></li>
        <li><a  href="{{ route('sales_5kg.index') }}">5kg Sales</a></li>
        <li><a  href="{{ route('sales_20kg.index') }}">20Kg Sales</a></li>
    </ul>
</li> --}}


<li class="nav-item">
    <a class="nav-link" href="{{ route('waste_intakes.index') }}">
      <i class="fas fa-fw fa-recycle"></i>
      <span>Waste Intakes</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('plant_operations.index') }}">
      <i class="fas fa-fw fa-industry"></i>
      <span>Plant Operations</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('screen_combustible.index') }}">
      <i class="fas fa-fw fa-fire"></i>
      <span>Screen Combustible</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('human_resource.index') }}">
      <i class="fas fa-fw fa-users"></i>
      <span>Human Resource</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('windrows_installation.index') }}">
      <i class="fa fa-th-list"></i> 
      <span>Windrows Installations</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('lab_analysis.index') }}">
      <i class="fas fa-fw fa-flask"></i> <!-- I used "fa-flask" as a placeholder, please replace it with your desired icon for Lab Analysis -->
      <span>Lab Analysis</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('sieving-units.index') }}">
      <i class="fas fa-fw fa-cog"></i> <!-- I used "fa-cog" as a placeholder, please replace it with your desired icon for Sieving Units -->
      <span>Sieving Units</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link"><i class="fa fa-shopping-cart"></i><span> Inventory <span class="float-right menu-arrow"><i class="fa fa-caret-right"></i></span> </span></a>
    <ul class="submenu">
      <li><a href="{{ route('inventories.index') }}">Bulk Inventory</a></li>
      <li><a href="{{ route('inventories5kg.index') }}">5kg Inventory</a></li>
      <li><a href="{{ route('inventories20kg.index') }}">20Kg Inventory</a></li>
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link"><i class="fa fa-database"></i><span> Sales <span class="float-right menu-arrow"><i class="fa fa-caret-right"></i></span> </span></a>
    <ul class="submenu">
      <li><a href="{{ route('bulk_sales.index') }}">Bulk Sales</a></li>
      <li><a href="{{ route('sales_5kg.index') }}">5kg Sales</a></li>
      <li><a href="{{ route('sales_20kg.index') }}">20Kg Sales</a></li>
    </ul>
  </li>





            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
