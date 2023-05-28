<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

       <!-- Vendor CSS Files -->
       <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
       <link rel="stylesheet" href="assets/vendor/aos/aos.css">
       <link rel="stylesheet" href="assets/vendor/remixicon/remixicon.css">
       <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
       <link rel="stylesheet" href="assets/vendor/glightbox/css/glightbox.min.css">
       <link rel="stylesheet" href="assets/vendor/themify-icons/themify-icons.css">
       <link rel="stylesheet" href="assets/vendor/slick/slick.css">
       <link rel="stylesheet" href="assets/vendor/slick/slick-theme.css">
   
   
       <!-- CSS Style -->
       <link rel="stylesheet" href="assets/css/style.css">
   
       <!-- Font Family -->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;1,200&display=swap"
           rel="stylesheet">
</head>
<body>
    <header id="header" class="header fixed-top">
        <!-- Navbar Navigation -->
        <div id="navbar-container"
            class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="assets/img/Logo BIT.png" alt="">
                <span>BIT</span>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    @auth                       
                    <li><a class="nav-link scrollto active" href="/home">Home</a></li>
                    <li class="nav-link scrollto"><a href="/bootcamp"><span>Bootcamp</span></a></li>
                    <li class="nav-link scrollto"><a href="#"><span>Dashboard</span></a></li>
                    <li><a class="nav-link scrollto" href="/blog">Blog</a></li>
                    <li><form action="/logout" method="POST">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form></li>
                    <li><a class="getstarted scrollto" href="">Get Started</a></li>
                    @else
                    <li><a class="nav-link scrollto active" href="/home">Home</a></li>
                    <li class="nav-link scrollto"><a href="/bootcamp"><span>Bootcamp</span></a></li>
                    <li><a class="nav-link scrollto" href="/blog">Blog</a></li>
                    <li><a class="" href="/login">Login</a></li>
                    <li><a class="getstarted scrollto" href="">Get Started</a></li>
                    <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
                    @endauth
                </ul>
            </nav>
        </div>

    </header>
    <section id="home" class="section gradient-banner">
        <div class="shapes-container">
            <div class="shape" data-aos="fade-down-left"></div>
            <div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
            <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
            <div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                    <h1 class="text-white font-weight-bold mb-4">
                        Nama: {{ auth()->user()->username }}
                        <br>
                        Role: {{ auth()->user()->role->role_name }}
                    </h1>
                </div>
                <div class="col-md-6 text-center order-1 order-md-2" data-aos="zoom-out">
                    <img class="img-fluid" src="assets/img/element/img1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <main>
    </main>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- File JS -->
    <script src="assets/js/main.js"></script>
 
</body>
</html>