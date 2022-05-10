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
                                        <img
                                        src="{{ asset('/images/logoheader.png') }}"
                                        alt=""
                                        class="mr-2 rounded-circle profile-picture">
                                        Hi, {{ Auth::user()->first_name }}
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="{{route('dashboard')}}" class="dropdown-item">My Profile</a>
                                        <a href="{{route('dashboard.documents')}}" class="dropdown-item">My Documents</a>
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
