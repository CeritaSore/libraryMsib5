<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/buku') }}">
                <i class="ti-book icon-grid menu-icon"></i>
                <span class="menu-title">Buku</span>
            </a>
        </li>

        
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false"
                    aria-controls="tables">
                    <i class="icon-grid-2 menu-icon"></i>
                    <span class="menu-title">Tables</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/kategori') }}">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pengarang') }}">Pengarang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/penerbit') }}">Penerbit</a>
                        </li>
                    </ul>
                </div>
        
        </li>
        @if (Auth::user()->role != 'Guest' && 'Staff')
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/user') }}">
                    <i class="ti-user icon-grid menu-icon"></i>
                    <span class="menu-title">Kelola User</span>
                </a>
            </li>
        @endif



        </li>



    </ul>
</nav>
