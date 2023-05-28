<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/Logo BIT.png" type="image/icon type">
    <title>Landing Page</title>


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
    <!-- Header -->
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
                    <li><a class="nav-link scrollto active" href="#home">Home</a></li>
                    <li class="nav-link scrollto"><a href="/bootcamp"><span>Bootcamp</span></a></li>
                    <li class="nav-link scrollto"><a href="/dashboard"><span>Dashboard</span></a></li>
                    <li><a class="nav-link scrollto" href="/blog">Blog</a></li>

                    <li><form action="/logout" method="POST">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form></li>
                    <li><a class="getstarted scrollto" href="">Get Started</a></li>
                    @else
                    <li><a class="nav-link scrollto active" href="#home">Home</a></li>
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
    <!-- Hero/banner -->

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
                        Selamat Datang di BIT!
                    </h1>
                    <p class="text-white mb-5">
                        PLatform belajar terbaik untuk kembangkan keahlian baru dan tingkatkan karier Anda.
                    </p>
                    <a href="" class="btn btn-light">Let's Learn</a>
                </div>
                <div class="col-md-6 text-center order-1 order-md-2" data-aos="zoom-out">
                    <img class="img-fluid" src="assets/img/element/img1.png" alt="">
                </div>
            </div>
        </div>
    </section>



    <main>
        <!-- Class Section -->
        <section id="bootcamp" class="class-banner">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Daftar Bootcamp</h2>
                    <p>Pelajari hal baru dan mulai karier barumu!</p>
                </header>
            </div>
            <div class="container container-class" data-aos="fade-up">
                    

                    
                <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">

                    <div class="row">
                        <div class="col-lg-10">
                            <a href="/bootcamp" class="btn-lihat-semua">
                                <span>Lihat Semua Kelas</span>

                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a class="swiper-class-prev" href="">
                                <i class="bi-arrow bi-arrow-left-circle"></i>
                            </a>
                            <a class="swiper-class-next" href="">
                                <i class="bi-arrow bi-arrow-right-circle"></i>
                            </a>

                        </div>
                    </div>

                    
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="content">
                                <h3 class="font-weight-bold">Artificial Intelligence</h3>
                                <span class="icon-container">
                                    <i class="ri-book-3-line"></i>
                                    <p class="m-3 font-weight-bold">0 Modul</p>
                                    <i class="bi bi-people-fill"></i>
                                    <p class="m-3 font-weight-bold">0 Siswa</p>
                                </span>

                                <p>
                                    Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et
                                    dolor
                                    consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum
                                    nam
                                    et est corrupti.
                                </p>
                                <h5 class="font-weight-bold">Rp. 500.000</h5>
                                <div class="text-lg-start mt-4 d-inline-flex">
                                    <a href="#" class="btn-lihat-modul">
                                        <span>Lihat Modul</span>

                                    </a>
                                    <a href="#" class="btn-belajar-sekarang">
                                        <span>Belajar Sekarang</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="assets/img/element/img1.png" alt="">

                        </div>
                    </div>

                </div>
            </div>


            
        </section>

        <!-- Daftar Mentor -->
        <section id="daftar-mentor" class="daftar-mentor" >
            <div class="container slide-container swiper" data-aos="fade-up">
                <header class="section-header">
                    <h2>Mentor</h2>
                    <p>Daftar Mentor di Belajar IT</p>
                </header>
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="assets/img/mentor/mentor1.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <span>Chief Executive Officer</span>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="assets/img/mentor/mentor2.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <span>Chief Executive Officer</span>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="assets/img/mentor/mentor3.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <span>Chief Executive Officer</span>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="assets/img/mentor/mentor4.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <span>Chief Executive Officer</span>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="assets/img/mentor/mentor5.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <span>Chief Executive Officer</span>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="assets/img/mentor/mentor6.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <span>Chief Executive Officer</span>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <img src="assets/img/mentor/mentor7.jpg" alt="" class="card-img">
                                </div>
                            </div>
    
                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <span>Chief Executive Officer</span>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <!--<img src="images/profile8.jpg" alt="" class="card-img">-->
                                </div>
                            </div>
    
                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <span>Chief Executive Officer</span>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
    
                                <div class="card-image">
                                    <!--<img src="images/profile9.jpg" alt="" class="card-img">-->
                                </div>
                            </div>
    
                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <span>Chief Executive Officer</span>
                                <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
    
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- Blog Section -->
        <section id="blog-post" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">
      
              <header class="section-header">
                <h2>Blog</h2>
                <p>Blog Terbaru Dari Kami</p>
              </header>
      
              <div class="row">
      
                <div class="col-lg-4">
                  <div class="post-box">
                    <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
                    <span class="post-date">Tue, September 15</span>
                    <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
                    <a href="#" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
      
                <div class="col-lg-4">
                  <div class="post-box">
                    <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
                    <span class="post-date">Fri, August 28</span>
                    <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                    <a href="#" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
      
                <div class="col-lg-4">
                  <div class="post-box">
                    <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
                    <span class="post-date">Mon, July 11</span>
                    <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                    <a href="#" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
      
              </div>
      
            </div>
      
        </section>

    </main>

    <!-- Footer -->
    <footer id="footer" class="footer">

    
        <div class="footer-top">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="assets/img/Logo BIT.png" alt="">
                    <span>Belajar IT</span>
                </a>
                <p>
                    BIT (Belajar IT) adalah sebuah platform digital yang dirancang untuk memberikan
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
                  Indonesia<br><br>
                  <strong>Phone:</strong> +62 5589 55488 55<br>
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