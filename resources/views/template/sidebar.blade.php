    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html">PERSEDIAAN</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">Sm</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>

                <li class="menu-header">Master Data</li>
                <li><a class="nav-link" href="{{ url('/user') }}"><i class="fas fa-user"></i><span>User</span></a>
                </li>
                <li><a class="nav-link" href="{{ url('/labor') }}"><i class="fas fa-box"></i><span>Barang</span></a>
                </li>

                <li class="menu-header">Main Data</li>
                <li><a class="nav-link" href="{{ url('/peminjaman') }}"><i
                            class="fas fa-cube"></i><span>Persediaan</span></a>
                </li>

            </ul>

        </aside>
    </div>
