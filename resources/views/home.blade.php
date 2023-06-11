@extends('layouts.navbar-login')
    <!-- Hero/banner -->
@section('container')
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

                    @foreach ($course as $course)
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="content">
                                <h3 class="font-weight-bold">{{ $course->title }}</h3>
                                <span class="icon-container">
                                    <i class="ri-book-3-line"></i>
                                    <p class="m-3 font-weight-bold">{{ $course->modul()->count() }} Modul</p>
                                    <i class="bi bi-people-fill"></i>
                                    <p class="m-3 font-weight-bold">0 Siswa</p>
                                </span>

                                <p>
                                   {{ $course->summary  }}
                                </p>
                                <h5 class="font-weight-bold">Rp. 500.000</h5>
                                <div class="text-lg-start mt-4 d-inline-flex">
                                    <a href="/bootcamp/{{ $course->id }}" class="btn-lihat-modul">
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
                    @endforeach

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

                @foreach ($blogs as $blog)
                <div class="col-lg-4">
                  <div class="post-box">
                    <div class="post-img"><img src="assets/img/blog/blog-{{ $i++ }}.jpg" class="img-fluid" alt=""></div>
                    <span class="post-date">Tue, September 15</span>
                    <h3 class="post-title">{{ $blog->title }}</h3>
                    <a href="/blog/{{ $blog->id }}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
                @endforeach  
      
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
      @endsection
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
