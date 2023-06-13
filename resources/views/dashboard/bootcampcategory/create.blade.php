@extends('layouts.sidebar')

@section('container')
    <main>
        <div class="container container-class" data-aos="fade-up"> 
            <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
                <div class="col-lg-8">

                    <form method="POST" action="/dashboard/bootcampcategory">
                        @csrf
                        <div class="mb-3">
                          <label for="name_category" class="form-label">Name Category</label>
                          <input type="text" class="form-control @error('name_category') is-invalid @enderror" id="name_category" name="name_category" required autofocus value="{{ old('name_category') }}">
                          @error('name_category')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror
                        </div>
                        <a href="/dashboard/bootcampcategory" class="btn btn-primary"><span >back to dashboard bootcamp category</span></a>
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