<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

    {{-- Trix --}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/trix.css') }}">
    <script type="text/javascript" src="{{ URL::asset('assets/js/trix.js') }}"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>
<body>

    <header id="header" class="header fixed-top">
        <!-- Navbar Navigation -->
        <div id="navbar-container"
            class="container-fluid container-xl d-flex align-items-center justify-content-between">
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
    <main>
        <div class="container container-class" data-aos="fade-up"> 
            <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
                <div class="col-lg-8">

                    <form method="POST" action="/dashboard/modul" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name Modul</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                          @error('name')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="description" class="form-label">Description Modul</label>
                          <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required autofocus value="{{ old('description') }}">
                          @error('description')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label for="id_course" class="form-label">Id Category</label>
                            <br>
                            <select class="form-select @error('id_course') is-invalid @enderror" id="id_course" name="id_course" aria-label="Default select example" value="{{ old('id_course') }}">
                              <option selected>Course for Modul</option>
                              @foreach ($courses as $item)
                              <option value="{{ $item->id }}">{{ $item->title }}</option>
                              @endforeach
                            </select>
                            @error('id_category')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror
                        </div> --}}
                        
                    
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </main>
          

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
    
    <script>
        document.addEventListener("trix-file-accept", function(event) {
            event.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>
</html>