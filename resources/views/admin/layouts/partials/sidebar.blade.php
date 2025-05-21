<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
<div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
    <a href="{{route('admin.dashboard')}}" class="logo">
        <img
        src="{{ asset('admin-assets/assets/img/kaiadmin/logo_light.svg') }}"
        alt="navbar brand"
        class="navbar-brand"
        height="20"
        />
    </a>
    <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
        <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
        <i class="gg-menu-left"></i>
        </button>
    </div>
    <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
    </button>
    </div>
    <!-- End Logo Header -->
</div>
<div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
    <ul class="nav nav-secondary">
        <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fas fa-home"></i>
                <p>Anasayfa</p>
            </a>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
            <a data-bs-toggle="collapse" href="#products">
                <i class="fas fa-concierge-bell"></i>
                <p>Ürün Yönetimi</p>
                <span class="caret"></span>
            </a>
            <div class="collapse {{ request()->routeIs('admin.products.*') ? 'show' : '' }}" id="products">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('admin.products.create') }}" class="{{ request()->routeIs('admin.products.create') ? 'active' : '' }}">
                        <span class="sub-item">Ürün Ekle</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.index') ? 'active' : '' }}">
                        <span class="sub-item">Ürünler</span>
                        </a>

                    </li>
                </ul>
            </div>
        </li>


        {{-- <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>Kullanıcı Yönetimi</p>
            </a>
        </li> --}}
    </ul>
    </div>
</div>
</div>
<!-- End Sidebar -->