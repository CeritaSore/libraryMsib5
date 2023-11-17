<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                   <a class="nav-link" href="?hal=data_person">Tabel Person</a>
                </li>
              </ul>
            </div>
          </li>

          

          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Login</span>
            </a>
          </li>

          
        </ul>
</nav>