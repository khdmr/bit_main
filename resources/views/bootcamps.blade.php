<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ URL::asset('assets/img/Logo BIT.png')}}" type="image/icon type">

    <title>Bootcamp</title>

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/aos/aos.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/remixicon/remixicon.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/glightbox/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/slick/slick-theme.css')}}">


    <!-- CSS Style -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-bootcamp.css')}}">

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
            <a href="" class="logo d-flex align-items-center">
                <img src="{{ URL::asset('assets/img/Logo BIT.png')}}" alt="">
                <span>BIT</span>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                  @auth
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li class="nav-link scrollto active"><a href="#bootcamp"><span>Bootcamp</span></a></li>
                    <li class="nav-link scrollto"><a href="/dashboard"><span>Dashboard</span></a></li>
                    <li><a class="nav-link scrollto" href="/blog">Blog</a></li>
                    <li><form action="/logout" method="POST">
                      @csrf
                      <button type="submit">Log Out</button>
                    </form></li>
                    <li><a class="getstarted scrollto" href="#">Get Started</a></li>
                  @else
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li class="nav-link scrollto active"><a href="#bootcamp"><span>Bootcamp</span></a></li>
                    <li><a class="nav-link scrollto" href="/blog">Blog</a></li>
                    <li><a class="" href="/login">Login</a></li>
                    <li><a class="getstarted scrollto" href="#">Get Started</a></li>
                    <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
                  @endauth
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero banner -->
    <section id="home" class="section gradient-bootcamp">
        <div class="row bootcamp-hero">
            <div class="col-lg-12 ">
                <h1>
                    Program Bootcamp
                </h1>
                <p>
                    PLatform belajar terbaik untuk kembangkan keahlian baru dan tingkatkan karier Anda.
                </p>
            </div>
            
        </div>
        
    </section>

    

    <main>
        <!-- kategori button -->
        <section id="bootcamp-list" class="bootcamp-list">
            <h2>Kategori</h2>
            <div class="list-kategori">
                <ul>
                  <li><a href=""><span>All</span></a></li>
                  @foreach ($categories as $category)
                    <li><a href=""><span>{{ $category->name_category }}</span></a></li>
                  @endforeach
                </ul>
            </div>
            <div id="bootcamp" class="card-wrapper">
                @foreach ($courses as $course)
                <div class="box">
                    <div class="box-top">
                        
                        <img class="box-image" src="https://images.unsplash.com/photo-1622219809260-ce065fc5277f?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMwNjYxOQ&ixlib=rb-1.2.1&q=85" alt="">
                        <div class="title-flex">
                            <h3>{{ $course["title"] }}</h3>
                        
                            <p>{{ $course->coursecategory->name_category }}</p>
                            <span class="icon-container">
                                <i class="ri-book-3-line"></i>
                                <p class="m-3 font-weight-bold">{{ $course->modul()->count() }}</p>
                                <i class="bi bi-people-fill"></i>
                                <p class="m-3 font-weight-bold">0 Siswa</p>
                            </span>
                        
                        </div>
                        <p>{{ $course["summary"] }}</p>
                    </div>
                    <a href="/bootcamp/{{ $course->id }}" class="button">Lihat Modul</a>
                </div>
                @endforeach
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="footer">

    
        <div class="footer-top">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo-footer d-flex align-items-center">
                  <img src="assets/img/Logo BIT.png" alt="">
                  <span>Belajar IT</span>
                </a>
                <p>BIT (Belajar IT) adalah sebuah platform digital yang dirancang untuk memberikan
                    akses kepada pengguna untuk belajar keahlian di bidang informatika secara daring / online dengan materi
                    dan mentor yang berkualitas.
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
    
              <div class="col-lg-2 col-6 footer-links">
                <h4>Tautan</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Bootcamp</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Blog</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>
    
              <div class="col-lg-2 col-6 footer-links">
                <h4>Program Bootcamp</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Artificial Intelligence</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Online Marketing</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Android Development</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Hubungi Kami</h4>
                <p>
                  Sekaran, Gunung Pati<br>
                  Semarang<br>
                  Indonesia <br><br>
                  <strong>Phone:</strong> +62 5589 5548 21<br>
                  <strong>Email:</strong> BelajarIT@gmail.com<br>
                </p>
    
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
    </footer>

    <!-- Vendor JS files -->
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

    <!-- File JS -->
    <script src="{{ URL::asset('assets/js/main.js')}}"></script>
    
</body>
</html>