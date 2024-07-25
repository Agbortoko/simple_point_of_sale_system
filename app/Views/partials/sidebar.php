<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <a class="nav-link <?= url_is(route_to('admin.dashboard')) ? 'active' : '' ?>" href="<?= route_to('admin.dashboard') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Items</div>

                <a class="nav-link <?= url_is(route_to('admin.dashboard.items')) ? 'active' : '' ?>" href="<?= route_to('admin.dashboard.items') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-warehouse"></i></div>
                    Inventory
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>