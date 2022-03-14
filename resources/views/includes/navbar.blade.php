    <!-- navbar -->
    <nav
        class="navbar navbar-expand-lg navbar-light navbar-sea fixed-top navbar-fixed-top"
        data-aos="fade-down">

        <div class="container">
            <a href="{{route('home')}}" class="navbarbrand text-align-center">
                <img src="{{url('images/sosslogo.png')}}" alt="logo" class="navbar-logo">
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="ml-auto navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/categories.html">Jobs</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a
                        href="{{  route('login') }}"
                        class="px-4 text-white btn btn-success nav-link"
                        >Sign In</a
                        >
                    </li>
                    @endguest
                </ul>

                @auth
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex">
                    <li class="nav-item dropdown">
                    <a
                        class="nav-link"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Hi, {{Auth::user()->first_name    }}
                        <img
                        src="/images/icon-user.png"
                        alt=""
                        class="mr-2 rounded-circle profile-picture"
                        />
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                        <a class="dropdown-item" href=""
                        >Settings</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                        </form>
                    </div>
                    </li>
                </ul>

                <!-- Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                        Hi, {{ Auth::user()->first_name }}
                    </a>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
    </nav>
