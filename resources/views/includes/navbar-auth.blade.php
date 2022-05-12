    <!-- navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="{{ asset('/images/logoheader.png')}}" alt="Logo" />
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
            <li class="nav-item active">
              <a href="" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">News</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
