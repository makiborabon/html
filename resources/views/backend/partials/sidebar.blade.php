<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Administrator <sup></sup></div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Sales
        </div>

        <!-- Nav Item - POS Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSales" aria-expanded="true" aria-controls="collapseSales">
              <i class="fas fa-truck"></i>
              <span>Deliveries</span>
          </a>
          <div id="collapseSales" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Delivery:</h6>
                <a class="collapse-item" href="{{ url('pos/create') }}">New Delivery</a>
                <a class="collapse-item" href="{{ url('pos') }}">Records</a>
            </div>
          </div>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
          Inventory Records
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLogistic" aria-expanded="true" aria-controls="collapseLogistic">
            <i class="fas fa-fw fa-box"></i>
            <span>Inventory</span>
          </a>
          <div id="collapseLogistic" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Inventory:</h6>
              <a class="collapse-item" href="{{ url('inventory/create') }}">New Inventory</a>
              <a class="collapse-item" href="{{ url('inventory') }}">Records</a>
              
            </div>
          </div>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
          Payments
        </div>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBilling" aria-expanded="true" aria-controls="collapseBilling">
              <i class="fas fa-donate"></i>
              <span>Billing</span>
          </a>
          <div id="collapseBilling" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Billing:</h6>
                <a class="collapse-item" href="{{ url('billing/create') }}">New Billing</a>
                <a class="collapse-item" href="{{ url('billing') }}">Records</a>
            </div>
          </div>
        </li>
  
        
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Organization
        </div>
  
        <!-- Nav Item - Clients Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClient" aria-expanded="true" aria-controls="collapseClient">
            <i class="fas fa-users"></i>
            <span>Clients</span>
          </a>
          <div id="collapseClient" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Clients:</h6>
              <a class="collapse-item" href="{{ url('client/create') }}">New Client</a>
              <a class="collapse-item" href="{{ url('client') }}">Record</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSupplier" aria-expanded="true" aria-controls="collapseSupplier">
            <i class="fas fa-users"></i>
            <span>Suppliers</span>
          </a>
          <div id="collapseSupplier" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Suppliers:</h6>
              <a class="collapse-item" href="{{ url('supplier/create') }}">New Client</a>
              <a class="collapse-item" href="{{ url('supplier') }}">Record</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
            <i class="fas fa-fw fa-cog"></i>
            <span>Admin</span>
          </a>
          <div id="collapseAdmin" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Users:</h6>
              <a class="collapse-item" href="{{ url('register') }}">New User</a>
            <a class="collapse-item" href="{{ url('users') }}">Records</a>
              <div class="collapse-divider"></div>
              <h6 class="collapse-header">Settings:</h6>
              <a class="collapse-item" href="404.html">404 Page</a>
              <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
          </div>
        </li>
        
        <!-- Heading -->
        <div class="sidebar-heading">
          CMS
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCms" aria-expanded="true" aria-controls="collapseCmsss">
            <i class="fas fa-fw fa-cube"></i>
            <span>CMS</span>
          </a>
          <div id="collapseCms" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">POS:</h6>
              <a class="collapse-item" href="{{ url('delivery/create') }}">New POS</a>
              <a class="collapse-item" href="{{ url('delivery') }}">Records</a>
              <div class="collapse-divider"></div>
              <h6 class="collapse-header">Supllier Delivery:</h6>
              <a class="collapse-item" href="404.html">New </a>
              <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
          </div>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
          Settings
        </div>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
              <i class="fas fa-fw fa-cube"></i>
              <span>Settings</span>
            </a>
            <div id="collapseSetting" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Product Category:</h6>
                <a class="collapse-item" href="{{ url('product-category/create') }}">New Product Category</a>
                <a class="collapse-item" href="{{ url('product-category') }}">Records</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Supllier Delivery:</h6>
                <a class="collapse-item" href="404.html">New </a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
              </div>
            </div>
          </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->