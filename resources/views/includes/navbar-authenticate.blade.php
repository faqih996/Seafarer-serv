    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="text-center sidebar-heading">
            <img src="{{ asset('/images/logoheader.png')}}" alt="" class="my-4" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="/dashboard.html"
              class="list-group-item list-group-item-action active"
              >Dashboard</a
            >
            <a
              href="/dashboard-products.html"
              class="list-group-item list-group-item-action"
              >My Profile</a
            >
            <a
              href="/dashboard-transactions.html"
              class="list-group-item list-group-item-action"
              >My Documents</a
            >
            <a
              href="/dashboard-account.html"
              class="list-group-item list-group-item-action"
              >My Account</a
            >
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light navbar-sea fixed-top"
          data-aos="fade-down">

        <div class="container">
          <button class="mr-2 mr-auto btn-secondary d-md-none" id="menu-toggle">
              &laquo; Menu
          </button>
            <button
              class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
              <span class="navbar-toggler-icon"></span>
            </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <!-- Desktop Menu -->
                            <ul class="ml-auto navbar-nav d-none d-lg-flex">
                                <li class="nav-item dropdown">
                                    <a href="" class="nav-link"
                                        id="navbarDropdown"
                                        role="button"
                                        data-toggle="dropdown"
                                    >
                                    {{-- @if (auth()->user()->detail_user()->first()->photo != NULL)
                                        <img src="{{ url(Storage::url(auth()->user()->detail_user()->first()->photo)) }}" alt="photo-profile"
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
                                        Hi, {{ Auth::user()->first_name }}
                                    </a>
                                    <div class="dropdown-menu">
{{--
                                        @if ($user->roles == 'ADMIN') {
                                            return redirect('admin');
                                        } @else ($user->roles == 'USER') {
                                            return redirect('dashboard');
                                        } @else {
                                            return redirect('/');
                                        } --}}
                                        @if ($user->roles == 'ADMIN')
                                            <a href="{{route('admin')}}" class="dropdown-item">Admin Dashboard</a>
                                        @else
                                            <a href="{{route('dashboard')}}" class="dropdown-item">My Dashboard</a>
                                        @endif
                                        {{-- <a href="{{route('dashboard')}}" class="dropdown-item">My Dashboard</a> --}}

                                        <a href="{{route('dashboard.profile')}}" class="dropdown-item">My Profile</a>
                                        <a href="" class="dropdown-item">Settings</a>

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
                                <li class="nav-item">
                                    <a href="" class="mt-2 nav-link d-inline-block">
                                        <img src="" alt="">
                                    </a>
                                </li>
                            </ul>
                            <!-- mobile Menu -->
                            <ul class="navbar-nav d-block d-lg-none">
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Hi, {{ Auth::user()->first_name }}
                                </a>
                                </li>
                                <li class="nav-item">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
