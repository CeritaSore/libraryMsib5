<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{ url('/dashboard') }}"><img
                src="{{ asset('backend/assets/images/logo.svg') }}" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('/dashboard') }}"><img
                src="{{ asset('backend/assets/images/logo-mini.svg') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                        <span class="input-group-text" id="search">
                            <i class="icon-search"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                        aria-label="search" aria-describedby="search">
                </div>
            </li>
        </ul>

        @if (empty(Auth::user()->foto))
        <img src="{{ asset('backend/assets/img/nophoto.jpg') }}" width="4.5%" alt="Profile" class="rounded-circle">
        @else
        <img src="{{ asset('backend/assets/img') }}/{{ Auth::user()->foto }}" width="4.5%" alt="Profile" class="rounded-circle">
        @endif

                <div class="dropdown navbar-navnavbar-nav-right">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @if (empty(Auth::user()->name))
                            ''
                        @else
                            {{ Auth::user()->name }}
                        @endif
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">
                            <h6>
                                @if (empty(Auth::user()->name))
                                    '' 
                                @else
                                    {{ Auth::user()->name }}
                                @endif
                            </h6>
                            <span>
                                @if (empty(Auth::user()->role))
                                     '' 
                                @else
                                    {{ Auth::user()->role}}
                                @endif
                            </span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/profile') }}"><i class="bi bi-person"> Profile</i></a></li>
                        @if (Auth::user()->role == 'Administrator')
                            <li><a class="dropdown-item" href="{{ url('/user') }}">
                                <i class="bi bi-gear"> Kelola Akun</i></a></li>
                        @endif
                        <li class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                 <i class="bi bi-door-open-fill"> {{ __('Logout') }}</i> 
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>

                



       


    </div>
</nav>
<!-- partial -->
