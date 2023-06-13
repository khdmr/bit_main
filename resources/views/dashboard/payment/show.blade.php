@extends('layouts.sidebar')
@section('container')

  <main>
    <div class="container container-class" data-aos="fade-up"> 
      <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
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
                    @if ($payment->id_payment_status == 1)
                    <button class="btn btn-success"><a href="/dashboard/payment/{{ $payment->id }}/edit"><span class="">Aktivasi</span></a></button>
                    <form action="/dashboard/payment/{{ $payment->id }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span>delete</span></button>
                    @endif
                    </form>

              
            </article><!-- End blog entry -->
          </div><!-- End blog entries list -->

          

        </div>

      </div>
    </section><!-- End Blog Single Section -->
  </div>

</div>

  </main><!-- End #main -->
@endsection
