<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $course->title }}</title>

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
</head>
<body>
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->summary }}</p>
    <ul>
        @foreach($course->modul as $modul)
        <li>{{ $modul->name }}</li>
        <p>{{ $modul->description }}</p>
        @foreach($modul->material as $material)
            <p>{{ $material->title }}</p>
        @endforeach
        @endforeach
    </ul>
    <p>TOTAL HARGA: {{ $course->price }}</p>

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
        <button type="submit">Bayar</button>
    </form>

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