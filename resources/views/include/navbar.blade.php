{{-- NAVBAR --}}

<header id="header" class="pt-lg-5 pt-md-3 pt-2 position-absolute w-100">
    <div class="container-fluid px-xl-17 px-lg-5 px-md-3 px-0 d-flex flex-wrap">
        <div class="col-6 col-sm-3 col-lg-2 order-sm-2 order-md-0 dis-none">
            <!-- langList -->
            <ul class="nav nav-tabs langList pt-xl-6 pt-lg-4 pt-3 border-bottom-0">

            </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-8 static-block">
            <!-- mainHolder -->
            <div class="mainHolder justify-content-center">
                <!-- pageNav1 -->
                <nav class="navbar navbar-expand-lg navbar-light p-0 pageNav1 position-static w-100">
                    {{-- Logo di kiri --}}
                    <a class="navbar-brand" href="{{ url('#') }}">
                        <img src="{{ asset('assets/images/logo new.png') }}" alt="Logo" class="img-fluid"
                            style="height: 40px;">
                    </a>

                    {{-- Toggle Button --}}
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    {{-- Navigasi --}}
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto text-uppercase text-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/beranda') }}">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about-us') }}">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/lacak') }}">Lacak pengiriman</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
        <div class="col-6 col-sm-3 col-lg-2 order-sm-3 order-md-0 dis-none">
            <!-- wishList -->
            <ul
                class="nav nav-tabs wishList pt-xl-5 pt-lg-4 pt-3 mr-xl-3 mr-0 justify-content-end border-bottom-0">
                {{-- <li class="nav-item">
                    <a class="nav-link icon-search" href="javascript:void(0);"></a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link position-relative icon-cart" href="{{ url('/pembayaran') }}">
                        <span class="num rounded-circle bg-danger text-white px-2 py-1 position-absolute top-0 start-100 translate-middle">
                            5
                        </span>
                        <i class="bi bi-cart-fill"></i> <!-- contoh icon Bootstrap -->
                    </a>
                </li>

                <li>
                    <a class="nav-link" data-toggle="dropdown" href="javascript:void(0);" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu pl-4 pr-4">
                        <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                        <a class="dropdown-item" href="{{ url('/register') }}">Registration</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</header>