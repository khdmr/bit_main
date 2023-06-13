@extends('layouts.sidebar')

@section('container')
    <main>
        <div class="container container-class" data-aos="fade-up"> 
            <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
                <div class="col-lg-8">

                    <form method="POST" action="/dashboard/bootcamp" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="id_category" class="form-label">Id Category</label>
                            <br>
                            <select class="form-select @error('id_category') is-invalid @enderror" id="id_category" name="id_category" aria-label="Default select example" value="{{ old('id_category') }}">
                              <option selected>Category for Bootcamp</option>
                              @foreach ($categories as $item)
                              <option value="{{ $item->id }}">{{ $item->name_category }}</option>
                              @endforeach
                            </select>
                            @error('id_category')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                          @error('title')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="summary" class="form-label">Summary Class</label>
                            @error('summary')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                            <input id="summary" type="hidden" name="summary" value="{{ old('summary') }}">
                            <trix-editor input="summary"></trix-editor>
                        </div>
                        <div class="mb-3">
                          <label for="description" class="form-label">Description Class</label>
                          @error('description')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                          <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                          <trix-editor input="description"></trix-editor>
                      </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="integer" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required autofocus value="{{ old('price') }}">
                            @error('price')
                              <div class="invalid-feedback">
                                  <p class="text-danger">{{ $message }}</p>
                              </div>
                            @enderror
                          </div>
                          <a href="/dashboard/bootcamp" class="btn btn-primary"><span >back to dashboard bootcamp</span></a>
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