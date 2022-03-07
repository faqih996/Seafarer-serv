<!DOCTYPE html>
<html lang="en">
  <head>

      @include('includes.meta')
      <title>@yield('title')</title>

      @stack('prepend-style')
      @include('includes.style')
      @stack('addon-style')

  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/sosslogo.png" alt="" class="my-4" width="200"/>
          </div>
          <div class="list-group list-group-flush">
            <a
              {{-- href="{{ route('dashboard') }}" --}}
              class="list-group-item list-group-item-action {{ (request()->is('dashboard')) ? 'active' : '' }} "
            >
              Dashboard
            </a>
            <a
              {{-- href="{{ route('dashboard-product') }}" --}}
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/products*')) ? 'active' : '' }} "
            >
              My Profile
            </a>
            <a
              {{-- href="{{ route('dashboard-transaction') }}" --}}
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/documents*')) ? 'active' : '' }} "
            >
              My Documents
            </a>
            <a
              {{-- href="{{ route('dashboard-settings-store') }}" --}}
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/settings*')) ? 'active' : '' }} "
            >
              My Account
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Logout
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
                class="btn btn-secondary d-md-none mr-auto mr-2"
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
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                        href="#"
                        class="nav-link"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                    >
                        <img
                            src="/images/icon-user.png"
                            alt=""
                            class="rounded-circle mr-2 profile-picture"
                        />
                       Hi, {{ Auth::user()->first_name }}
                    </a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Dashboard</a>
                        <a href="" class="dropdown-item">
                            Settings
                        </a>
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
                    <a href="" class="nav-link d-inline-block mt-2">
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
                           Hi, {{ Auth::user()->first_name }}
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
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
