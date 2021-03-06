<!DOCTYPE html>
<html lang="en">
    <head>

        @include('includes.meta')
        <title>@yield('title')</title>

        @stack('prepend-style')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.css"/>
        @include('includes.style')
        @stack('addon-style')

    </head>
    <body>
        <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
            <div class="text-center sidebar-heading">
                <img src="{{ asset('/images/admin.png') }}" alt="" class="my-4" style="max-width: 100px"/>
            </div>
            <div class="list-group list-group-flush">
                <a
                href="{{ route('admin-dashboard') }}"
                class="list-group-item list-group-item-action {{ (request()->is('admin')) ? 'active' : '' }} "
                >
                Dashboard
                </a>
                <a
                href="{{ route('user.index') }}"
                class="list-group-item list-group-item-action {{ (request()->is('admin/user*')) ? 'active' : '' }}"
                >
                Accounts Setting
                </a>
                <a
                href="{{ route('profiles.index')  }}"
                class="list-group-item list-group-item-action {{ (request()->is('admin/profiles*')) ? 'active' : '' }}"
                >
                Applicant Database
                </a>
                <a
                {{-- href="{{ route('profile.edit', $user->id) }}"
                class="list-group-item list-group-item-action {{ (request()->is('dashboard/profile*')) ? 'active' : '' }} "
                >
                Me
                </a> --}}
                <a
                href="{{ route('category.index') }}"
                class="list-group-item list-group-item-action {{ (request()->is('admin/category*')) ? 'active' : '' }} "
                >
                Category
                </a>

                <a
                href="{{ route('product.index') }}"
                class="list-group-item list-group-item-action {{ (request()->is('admin/product')) ? 'active' : '' }}"
                >
                Product
                </a>

                <a
                href="{{ route('department.index') }}"
                class="list-group-item list-group-item-action {{ (request()->is('admin/department*')) ? 'active' : '' }}"
                >
                Departments
                </a>

                <a
                href="{{ route('position.index') }}"
                class="list-group-item list-group-item-action {{ (request()->is('admin/position')) ? 'active' : '' }} "
                >
                Positions
                </a>

                <a
                href="{{ route('documents.index') }}"
                class="list-group-item list-group-item-action {{ (request()->is('admin/documents*')) ? 'active' : '' }} "
                >
                Crew Documents
                </a>
                <a
                {{-- href="{{ route('dashboard-settings-store') }}" --}}
                class="list-group-item list-group-item-action {{ (request()->is('dashboard/settings*')) ? 'active' : '' }} "
                >
                My Account
                </a>
                <a
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                class="list-group-item list-group-item-action"
                >
                Sign Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            </div>

            <!-- Page Content -->
            <div id="page-content-wrapper">
            <nav
                class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
                data-aos="fade-down"
            >
                <div class="container-fluid">
                <button
                    class="mr-2 mr-auto btn btn-secondary d-md-none"
                    id="menu-toggle"
                >
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
                        <a
                            href="#"
                            class="nav-link"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <img
                                src=""
                                alt="user-icon"
                                class="mr-2 rounded-circle profile-picture"
                            />
                            Hi, {{ Auth::user()->first_name }}
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('admin-dashboard') }}" class="dropdown-item">Dashboard</a>
                            <a href="" class="dropdown-item">
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href=""
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
                            {{-- @php
                                $carts = \App\Cart::where('users_id', Auth::user()->id)->count();
                            @endphp
                            @if($carts > 0)
                                <img src="/images/icon-cart-filled.svg" alt="" />
                                <div class="card-badge"></div>
                            @else
                                <img src="/images/icon-cart-empty.svg" alt="" />
                            @endif --}}
                        </a>
                    </li>
                    </ul>

                    <ul class="navbar-nav d-block d-lg-none">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Hi, {{ Auth::user()->first_name}}
                            </a>
                        </li>

                    </ul>
                </div>
                </div>
            </nav>

            {{-- Content --}}
            @yield('content')

            </div>
        </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        @stack('prepend-script')
        <script src="{{ asset('/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js')}}"></script>
        <script src="{{ url('https://unpkg.com/aos@2.3.1/dist/aos.js')}}"></script>
        <script>
        AOS.init();
        </script>
        <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>
        @stack('addon-script')
    </body>
</html>
