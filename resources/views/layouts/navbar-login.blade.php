<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Login</title>

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/slick/slick-theme.css') }}">


    <!-- CSS Style -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">

</head>
<body>
    <header id="header" class="header fixed-top">
        <!-- Navbar Navigation -->
        <div id="navbar-container"
            class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <img src="{{ URL::asset('assets/img/Logo BIT.png') }}" alt="">
                <span>BIT</span>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li class="nav-link scrollto"><a href="/bootcamp"><span>Bootcamp</span></a></li>
                    <li><a class="nav-link scrollto" href="/blog">Blog</a></li>
                    <li class="dropdown"><a class="profil scrollto" href=""><img src="{{ URL::asset('assets/img/profil.jpg') }}" alt=""></a>
                        <ul>
                            {{-- <li><a href="">Profil</a></li> --}}
                            {{-- <li><a href="">Pengaturan Akun</a></li> --}}
                            {{-- <li><a href="">Sertifikat</a></li> --}}
                            <li><a href="/login">Login</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
        </div>


    </header>
    @yield('container')
    <!-- Vendor JS files -->
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- File JS -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>
</html>