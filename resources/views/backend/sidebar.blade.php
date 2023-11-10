<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
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
          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Login</span>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#data-user" aria-expanded="false" aria-controls="ui-basic">
              
            <i class="bi bi-person menu-icon">
            
            </i>
            
              <span class="menu-title">
              </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="data-user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Profile</a></li>
                <li><hr class="nav-divider"></li>
                <li class="nav-item"> <a class="nav-link bi bi-box-arrow-in-left" href="logout.php">Logout</a></li>
              </ul>
            </div>
          </li>
          
          
        </ul>
      </nav>