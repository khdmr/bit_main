@extends('layouts.navbar-login')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('assets/css/style-course-single.css')}}">
@endsection

@section('container')
<body>
    <!-- Hero banner -->
    <section id="home" class="section gradient-bootcamp">
        <div class="row bootcamp-course">
            <div class="col-8">
                <h1>
                    {{ $course->title }}
                </h1>
                <p>
                    {{ $course->summary }}
                </p>
            </div>
            <div class="col-4">

            </div>
        </div>

    </section>

    <main>
        <!-- Course Description -->
        <section class="course-description p-0">
            <div class="row m-0 p-0">
                <div class="col-md-8 m-0 p-0">
                    <div class="description">
                        <h2>
                            Description
                        </h2>
                        <p>
                            {!! $course->description !!}
                        </p>
                    </div>
    
                    <div class="course-content">
                        <h2>
                            Course Content
                        </h2>
                        <div class="box-content">
                          @foreach ($course->modul as $modul)
                            <div class="box-course">
                                <h3>{{ $modul->name }}</h3>  
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-0 m-0">
                    <div class="box-payment">
                        <img src="assets/img/course/web-development.png" alt="">
                        <h2>{{ $course->title }}</h2>
                        <span class="icon-container">
                            <i class="ri-book-3-line"></i>
                            <p class="m-3 font-weight-bold">{{ $course->modul->count() }} Modul</p>
                            <i class="bi bi-people-fill"></i>
                            <p class="m-3 font-weight-bold">{{ $course->user->count() }} Siswa</p>
                        </span>
                        <h2>Rp. 500.000</h2>
                        @auth
                            @if($course->user->contains(auth()->user()->id))
                            <a class="btn-payment" href="/bootcamp/{{ $course->id }}/modul/{{ $course->Modul->first()->Material->first()->id }}">Continue Learning</a>
                            @elseif($userpayment->where('id_user', auth()->user()->id)->where('id_course', $course->id)->where('id_payment_status', '1')->count()>0)
                            <a class="btn-payment" href="#">Waiting Activation From Admin</a>
                            @else
                            <a class="btn-payment" href="/bootcamp/{{ $course->id }}/pembayaran">Start Learning</a>
                            @endif
                        @else
                        <a class="btn-payment" href="/login">Start Learning</a>
                        @endauth
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
{{-- @endsection --}}

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