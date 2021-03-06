<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Javatrip|<sub>{{ Request::segment(1) }}</sub></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0 mt-3">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (Request::segment(2) == '') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ (Request::segment(2) == 'travel-package') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('travel-package.index') }}">
            <i class="fas fa-luggage-cart"></i>
            <span>Travel Package</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ (Request::segment(2) == 'gallery') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Travel Gallery</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ (Request::segment(2) == 'transaction') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('transaction.index') }}">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Transaction</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ (Request::segment(2) == 'banner-partner') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('banner-partner.index') }}">
            <i class="far fa-handshake"></i>
            <span>Banner Partner</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ (Request::segment(2) == 'about') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('about') }}">
            <i class="fas fa-tools"></i>
            <span>About</span>
        </a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>