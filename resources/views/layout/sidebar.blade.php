<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Peduli Diri</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header ">
                Pages
            </li>
        
            <li class="sidebar-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a class="sidebar-link" href="dashboard">
                    <i class="align-middle me-1" data-feather="home"></i> <span class="align-middle">Home</span>
                </a>
            </li>

            <li class="sidebar-item {{ (request()->is('hasil')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/hasil">
                    <i class="fas fa-fw fa-table"></i> <span class="align-middle">Catatan Perjalanan</span>
                </a>
            </li>

            <li class="sidebar-item {{ (request()->is('catatan')) ? 'active' : '' }}">
                <a class="sidebar-link" href="/catatan">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span class="align-middle">Isi Catatan</span>
                </a>
            </li>
        </ul>
    </div>
</nav>