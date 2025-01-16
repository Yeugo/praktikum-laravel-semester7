<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">MENU</div>
                <a class="nav-link {{ Route::is('users') ? 'active' : '' }}" href="{{ route('users') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    User
                </a>
                <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}" href="{{ route('products.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bag-shopping"></i></div>
                    Produk
                </a>
                <a class="nav-link {{ request()->routeIs('kategoris.*') ? 'active' : '' }}" href="{{ route('kategoris.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-tags"></i></div>
                    Kategori
                </a>
                <a class="nav-link {{ request()->routeIs('satuans.*') ? 'active' : '' }}" href="{{ route('satuans.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-usd"></i></div>
                    Satuan
                </a>
                <a class="nav-link {{ request()->routeIs('kustomers.*') ? 'active' : '' }}" href="{{ route('kustomers.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                    Kustomer
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>