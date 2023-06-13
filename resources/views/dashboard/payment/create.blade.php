@extends('layouts.sidebar')
@section('container')
    <main>
        <div class="container container-class" data-aos="fade-up"> 
            <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
                <div class="col-lg-8">

                    <form method="POST" action="/dashboard/payment" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="id_user" class="form-label">Id User</label>
                          <input type="integer" class="form-control @error('id_user') is-invalid @enderror" id="id_user" name="id_user" required autofocus value="{{ $payment->id_user }}">
                          @error('id_user')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror
                        </div>
                          <label for="id_course" class="form-label">Id Course</label>
                          <input type="integer" class="form-control @error('id_course') is-invalid @enderror" id="id_course" name="id_course" required autofocus value="{{ $payment->id_course }}">
                          @error('id_course')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror
                        </div>
                        <a href="/dashboard/payment" class="btn btn-primary"><span >back to dashboard payment</span></a>

                        <button type="submit" class="btn btn-success">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </main>

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
@endsection