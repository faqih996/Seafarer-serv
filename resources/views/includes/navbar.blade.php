    <!-- navbar -->
    <nav
        class="navbar navbar-expand-lg navbar-light navbar-sea fixed-top navbar-fixed-top"
        data-aos="fade-down">

        <div class="container">
            <a href="/" class="navbarbrand text-align-center">
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
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="{{route('home')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('home')}}" class="nav-link">Jobs</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-primary nav-link  px-4 text-white">Sign In</a>
                        </li>
                    @endguest
                </ul>

                @auth
                    <!-- Desktop Menu -->
                            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                 <li class="nav-item ">
                                    <a href="{{route('home')}}" class="nav-link">Jobs</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="" class="nav-link"
                                        id="navbarDropdown"
                                        role="button"
                                        data-toggle="dropdown"
                                    >
                                        <img
                                        src="images/icon-user.png"
                                        alt=""
                                        class="rounded-circle mr-2 profile-picture">
                                        Hi, {{Auth::user()->first_name}}
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="/dashboard.html" class="dropdown-item">My Profile</a>
                                        <a href="/dashboard.html" class="dropdown-item">My Documents</a>
                                        <a href="" class="dropdown-item">Settings</a>

                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Log Out</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link d-inline-block mt-2">
                                        <img src="" alt="">
                                    </a>
                                </li>
                            </ul>
                            <!-- mobile Menu -->
                            <ul class="navbar-nav d-block d-lg-none">
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Hi, , {{Auth::user()->first_name}}
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link d-inline-block">
                                    Log Out
                                </a>
                                </li>
                            </ul>
                @endauth
            </div>
        </div>
    </nav>
