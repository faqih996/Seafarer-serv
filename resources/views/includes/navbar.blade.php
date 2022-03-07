    <!-- navbar -->
    <nav
        class="navbar navbar-expand-lg navbar-light navbar-sea fixed-top navbar-fixed-top"
        data-aos="fade-down">

        <div class="container">
            <a href="/" class="navbarbrand text-align-center">
                <img src="images/logososs.png" alt="logo" class="navbar-logo">
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
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a href="/" class="nav-link">About Us</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle show" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Program
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" data-bs-popper="none">

                                <div class="col-lg-6 col-12">
                                    <li class="item-menu">
                                        <a href="" class="dropdown-item">
                                            <img src="images/logosea.png" alt="" class="icon">
                                            <p class="title">Regular</p>
                                            <p class="subtitle">Lorem ipsum dolor </p>
                                        </a>
                                    </li>

                                    <li class="item-menu">
                                        <a href="" class="dropdown-item">
                                            <img src="images/logosea.png" alt="" class="icon">
                                            <p class="title">Executive</p>
                                            <p class="subtitle">Lorem ipsum dolor </p>
                                        </a>
                                    </li>

                                    <li class="item-menu">
                                        <a href="" class="dropdown-item">
                                            <img src="images/logosea.png" alt="" class="icon">
                                            <p class="title">Executive</p>
                                            <p class="subtitle">Lorem ipsum dolor </p>
                                        </a>
                                    </li>
                                </div>

                        </ul>
                    </li> -->

                    <!-- <li class="nav-item">
                        <a href="index.html" class="nav-link">Webinar</a>
                    </li> -->

                    <!-- <li class="nav-item">
                        <a href="index.html" class="nav-link">Sea Update</a>
                    </li> -->

                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-primary nav-link  px-4 text-white">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
