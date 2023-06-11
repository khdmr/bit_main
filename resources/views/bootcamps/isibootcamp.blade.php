<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ URL::asset("assets/img/Logo BIT.png") }}" type="image/icon type">

    <title>Kelas</title>

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
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-detail-kelas.css') }}">

    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;1,200&display=swap"
        rel="stylesheet">

</head>
<body>
    <!-- ======= Header ======= -->
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
                <li><a class="nav-link scrollto" href="#home">Home</a></li>
                <li class="nav-link scrollto"><a href="#bootcamp"><span>Bootcamp</span></a></li>
                <li><a class="nav-link scrollto" href="#blog-post">Blog</a></li>
                <li><a class="getstarted scrollto" href="">Get Started</a></li>
                <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
            </ul>
        </nav>
    </div>
</header>

    <main id="main">
    
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up">
    
            <div class="row">
    
              <div class="col-lg-8 entries">
    
                <article class="entry entry-single">

                    <h2 class="entry-title">
                      {{ $material->title  }}
                    </h2>

                    <div class="entry-content">
                      {{ $material->description  }}
                    </div>
                  </article><!-- End blog entry -->
    
                
    
              </div><!-- End blog entries list -->
    
              <div class="col-lg-4">
    
                <div class="sidebar">
                    <h2>Daftar Modul</h2>
                    @foreach($course->modul as $modul)
                      <h3 class="sidebar-title">{{ $modul->name }}</h3>
                      <div class="sidebar-item categories">
                        @foreach ($modul->material as $material)
                            <ul>
                                <li><a href="#">{!! $material->title !!}</a></li>
                            </ul> 
                        @endforeach
                            
                    @endforeach
                      </div><!-- End sidebar categories-->
                </div><!-- End sidebar -->
    
              </div><!-- End blog sidebar -->
    
            </div>
    
          </div>
        </section><!-- End Blog Section -->
    
      </main><!-- End #main -->


    <!-- Footer -->
    <footer id="footer" class="footer">

    
        <div class="footer-top">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo-footer d-flex align-items-center">
                  <img src="{{ URL::asset('assets/img/Logo BIT.png') }}" alt="">
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

{{-- <h1>Nama Course:</h1>
    <h1>{{ $course->title }}</h1>
    <br>
    <h2>Nama Modul dan Materi:</h2>
    @foreach($course->modul as $modul)
        <h2>{{ $modul->name }}</h2>
        @foreach($modul->material as $material)
            <p>{{ $material->title }}</p>
        @endforeach
    @endforeach --}}
