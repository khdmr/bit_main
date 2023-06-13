@extends('layouts.navbar-login')

@section('style')
<link rel="stylesheet" href="{{ URL::asset('assets/css/style-blog.css') }}">
@endsection

@section('container')
    <!-- Hero banner -->
    <section id="blog" class="section gradient-blog">
        <div class="row blog-hero">
            <div class="col-lg-12 ">
                <h1>
                    Welcome to Our Blog
                </h1>
                <p>
                    We've been told it is not possible to overachieve our customers’ expectations. We have not reinvented the wheel, we decided to build upon it.
                </p>
            </div>
            
        </div>
        
    </section>

    <main>
        <section class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 entries">

                        <article class="entry">
            
                          <div class="entry-img">
                            <img src="assets/img/blog/blog-entry.svg" alt="" class="img-fluid">
                          </div>
            
                          <h2 class="entry-title">
                            <a href="/blog/{{ $singleblog->id }}">{{ $singleblog->title }}</a>
                          </h2>
                          
                          <div class="entry-content">
                            <p>
                              {!! $singleblog->summary !!}
                            </p>
                            <div class="read-more">
                              <a href="/blog/{{ $singleblog->id }}">Read More</a>
                            </div>
                          </div>
            
                        </article>
                    </div>
                </div>
            </div>
            <div class="container" data-aos="fade-up">
                <h2 class="text-center">Recent Blog</h2>
                @foreach ($recentblogs as $recentblog) 
                <div class="row">
                    <div class="col-lg-11 entries">
                        <article class="entry-recent">
                            <img src="assets/img/blog/title-{{ $i++ }}.svg" alt="" class="img-fluid">
                            <h3>{{ $recentblog->title }}</h3>
                            <p>{!! $recentblog->summary !!}</p>
                            <div class="read-more">
                                <a href="/blog/{{ $recentblog->id }}">Read More</a>
                              </div>
                        </article>
                    </div>
                </div>
                @endforeach
            </div>

            
        </section>

        <!-- Blog Section -->
        <section id="blog-post" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">
                <h2 class="text-center">All Article</h2>
      
              <div class="row">
                @foreach ($blogposts as $blog)
                    <div class="col-lg-4">
                      <div class="post-box">
                        <div class="post-img"><img src="assets/img/blog/blog-all-1.svg" class="img-fluid" alt=""></div>
                        <span class="post-date">{{ $blog->created_at }}</span>
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

{{-- @foreach ($blogposts as $blog)
    <h1><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h1>
    <h3>{{ $blog->summary }}</h3>
    <p>{{ $blog->created_at }}</p>
    <p>{{ $blog->updated_at }}</p>
    <br>
@endforeach --}}