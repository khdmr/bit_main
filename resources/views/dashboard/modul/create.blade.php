@extends('layouts.sidebar')

@section('container')
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

                        <div class="mb-3">
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
                        </div>
                        
                    
                        <a href="/dashboard/modul" class="btn btn-primary"><span >back to dashboard modul</span></a>

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