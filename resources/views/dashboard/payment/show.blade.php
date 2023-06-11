<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ URL::asset('assets/img/Logo BIT.png')}}" type="image/icon type">

    <title>Blog</title>

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
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-blog-single.css')}}">

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
            <img src="{{ URL::asset('assets/img/Logo BIT.png')}}" alt="">
            <span>BIT</span>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                @auth                       
                <li><a class="nav-link scrollto active" href="/">Home</a></li>
                <li class="nav-link scrollto"><a href="/bootcamp"><span>Bootcamp</span></a></li>
                <li class="nav-link scrollto"><a href="#"><span>Category</span></a></li>
                <li class="nav-link scrollto"><a href="#"><span>Modul</span></a></li>
                <li class="nav-link scrollto"><a href="/dashboard/blogposts"><span>Blog</span></a></li>
                <li class="nav-link scrollto"><a href="#"><span>User</span></a></li>
                <li class="nav-link scrollto"><a href="#"><span>Konfirmasi Pembayaran</span></a></li>
                <li class="nav-link scrollto"><a href="#"><span>Transaksi Pembayaran</span></a></li>
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
<!-- End Header -->

  <main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">
               
                
           
              <div class="mb-3">
                <label for="title" class="form-label">Nama Course Yang akan Dibeli:</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  value="{{ $payment->Course->title }}" readonly>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

              <div class="mb-3">
                <label for="name" class="form-label">Nama Pembeli:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  value="{{ $payment->User->name }}" readonly>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

              <div class="mb-3">
                <label for="complete-name" class="form-label">Nama Lengkap Pembeli:</label>
                    <input type="text" class="form-control @error('complete-name') is-invalid @enderror" id="complete-name" name="complete-name" readonly value="{{ $payment->complete_name }}">
                    @error('complete-name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
              <div class="mb-3">
                <label for="email" class="form-label">Email Pembeli:</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" readonly value="{{ $payment->email }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

              <div class="mb-3">
                <label for="telepon" class="form-label">No. Telp Pembeli:</label>
                    <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" readonly value="{{  $payment->no_telp }}">
                    @error('telepon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="metode" class="form-label">Metode Pembayaran:</label>
                        <input type="text" class="form-control @error('metode') is-invalid @enderror" id="metode" name="metode" readonly value="{{  $payment->payment->payments_methods }}">
                        @error('metode')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                <div class="mb-3">
                    <label for="payment_status" class="form-label">Status Kelas:</label>
                        <input type="text" class="form-control @error('payment_status') is-invalid @enderror" id="payment_status" name="payment_status" readonly value="{{  $payment->Status->status_name  }}">
                        @error('payment_status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                <div class="mb-3">
                    <label for="total_bayar" class="form-label">Total Bayar:</label>
                        <input type="integer" class="form-control @error('total_bayar') is-invalid @enderror" id="total_bayar" name="total_bayar" readonly value="{{  $payment->total_payment}}">
                        @error('total_bayar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Bukti Pembayaran</label>
                        <input type="hidden" name="image" value="{{ $payment->payment_confirmation }}"> 
                        @if ($payment->payment_confirmation)
                            <img src="{{ URL::asset('storage/' . $payment->payment_confirmation) }}" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block" width="200">
                        @else
                        <p>Belum ada bukti pembayaran</p>
                        @endif
                        @error('image')
                        <div class="invalid-feedback">
                            <p class="text-danger">{{ $message }}</p>
                        </div>
                      @enderror  
                    </div>

                    
                    
                    <a href="/dashboard/payment" class="btn btn-warning"><span >back to dashboard Payment</span></a>
                    <button class="btn btn-success"><a href="/dashboard/payment/create"><span class="">Aktivasi</span></a></button>
                    <form action="/dashboard/payment/{{ $payment->id }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span>delete</span></button>
      
                    </form>

              
            </article><!-- End blog entry -->
          </div><!-- End blog entries list -->

          

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

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
