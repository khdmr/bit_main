@extends('layouts.sidebar')

@section('container')

<main>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
    </div>
@endif
    <div class="container container-class" data-aos="fade-up"> 
        <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
            <h1 class="text-primary text-center">Konfirmasi Pembayaran</h1>
            {{-- <a href="/dashboard/payment/create"><span class="text-primary">Create New </span></a> --}}
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                @foreach ($payments as $payment)
                    <tbody>
                    <tr>
                        <th scope="row">{{ $loop ->iteration  }}</th>
                        <td>{{ $payment->User->name}}</td>
                        <td>{{ $payment->Course->title }}</td>
                        <td>{{ $payment->payment->payments_methods}}</td>
                        <td>
                            @if ($payment->id_payment_status == 1)
                            <button class="btn btn-success"><a href="/dashboard/payment/{{ $payment->id }}/edit"><span class="text-primary">Aktivasi</span></a></button>
                            <button class="btn btn-warning"><a href="/dashboard/payment/{{ $payment->id }}"><span class="text-primary">Show</span></a></button>
                            <form action="/dashboard/payment/{{ $payment->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span>Delete</span></button>
                
                              </form>
                            @else
                            <button class="btn btn-warning"><a href="/dashboard/payment/{{ $payment->id }}"><span class="text-primary">Show</span></a></button>
                            @endif
                        </td>
                    </tr>
                    </tbody>
                @endforeach
              </table>
        </div>
    </div>
   
</main>
@endsection

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