<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran | {{ $course->title }}</title>

    <!-- Vendor CSS Files -->
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ URL::asset('assets2/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets2/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ URL::asset('assets2/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('assets2/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ URL::asset('assets2/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ URL::asset('assets2/js/config.js') }}"></script>
</head>
<body>
  <div class="container container-class" data-aos="fade-up"> 
    <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
        <div class="col-lg-8">
          <a href="/bootcamp/{{ $course->id }}"><p><-- Back to Course</p></a>
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->summary }}</p>
    <p>TOTAL HARGA: Rp{{ $course->price }}</p>
    <h2>Form Pembayaran</h2>
  <form action="/bootcamp/{{ $course->id }}/pembayaran" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="complete_name" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control @error('complete_name') is-invalid @enderror" id="complete_name" name="complete_name" required autofocus value="{{ old('complete_name') }}">
              @error('complete_name')
                <div class="invalid-feedback">
                    <p class="text-danger">{{ $message }}</p>
                </div>
              @enderror
        </div>
        <div class="mb-3">
          <label for="no_telp" class="form-label">No Telp</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="no_telp" name="no_telp" required autofocus value="{{ old('no_telp') }}">
              @error('no_telp')
                <div class="invalid-feedback">
                    <p class="text-danger">{{ $message }}</p>
                </div>
              @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback">
                    <p class="text-danger">{{ $message }}</p>
                </div>
              @enderror
        </div>
        @foreach($payments as $payment)
        <div class="form-check">
            <input type="radio" class="form-check-input" id="{{ $payment->id }}" name="id_payment" value={{ $payment->id }}>{{ $payment->payments_methods }}
            <p>{{ $payment->payments_address }}</p>
            <label class="form-check-label" for="{{ $payment->id }}"></label>
          </div>
        @endforeach
            <div class="mb-3">
                <label for="payment_confirmation" class="form-label">Bukti Pembayaran</label>
                <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                <input class="form-control @error('payment_confirmation') is-invalid @enderror" type="file" id="payment_confirmation" name="payment_confirmation" onchange="previewImage()">
                @error('payment_confirmation')
                <div class="invalid-feedback">
                    <p class="text-danger">{{ $message }}</p>
                </div>
              @enderror  
            </div>
        
        @csrf
        <input type="hidden" name="id_course" value="{{ $course->id }}">
        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
        <input type="hidden" name="total_payment" id="total_payment" value="{{ $course->price }}">
        <button class="btn btn-success" type="submit">Bayar</button>
      </form>
    </div>
  </div>
</div>

      <!-- Vendor JS files -->
      <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
      <script src="{{ URL::asset('assets/vendor/aos/aos.js')}}"></script>
      <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>
      <script src="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{ URL::asset('assets/vendor/purecounter/purecounter.js')}}"></script>
      <script src="{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
      <script src="{{ URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    
      <!-- File JS -->
      <script src="assets/js/main.js"></script>
      
      <script>
        function previewImage() {
            const image = document.querySelector('#payment_confirmation');
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