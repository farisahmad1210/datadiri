
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <span class="text-dark"> {{ auth()->user()->nama }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="/">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>