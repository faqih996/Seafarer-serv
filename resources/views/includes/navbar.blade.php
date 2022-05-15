    <!-- navbar -->
    <nav
        class="navbar navbar-expand-lg navbar-light navbar-sea fixed-top navbar-fixed-top"
        data-aos="fade-down">

        <div class="container">
            <a href="{{route('home')}}" class="navbarbrand text-align-center">
                <img src="{{ asset('/images/logoheader.png')}}" alt="logo" class="navbar-logo">
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
                        <a class="nav-link" href="">Jobs</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a
                        href="{{  route('login') }}"
                        class="px-4 text-white btn btn-primary nav-link"
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
                        {{-- Hi, {{Auth::user()->first_name }}
                        @if (auth()->user()->detail_user()->first()->photo != NULL)
                            <img src="{{ url(Storage::url(auth()->users()->detail_user()->first()->photo)) }}" alt="photo profile"
                            srcset="" class="mr-2 rounded-circle profile-picture">
                        @else
                        <span class="mr-2 rounded-circle profile-picture">
                            <svg class="inline w-12 h-12 mr-3 rounded-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </span>
                        @endif --}}
                        <img
                        src="{{ asset('/images/logoheader.png') }}"
                        alt=""
                        class="mr-2 rounded-circle profile-picture">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (auth()->user()->roles = 'ADMIN')
                            <a href="{{ route('admin-dashboard') }}" class="dropdown-item">Admin Dashboard</a>
                        @else
                            <a href="{{ route('dashboard') }}" class="dropdown-item">My Dashboard</a>
                        @endif

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
