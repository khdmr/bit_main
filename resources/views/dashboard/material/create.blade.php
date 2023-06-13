@extends('layouts.sidebar')
@section('container')
    <main>
        <div class="container container-class" data-aos="fade-up"> 
            <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
                <div class="col-lg-8">

                    <form method="POST" action="/dashboard/material" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Title Modul</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                          @error('title')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="image" class="form-label">Post Image</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                            @error('image')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror  
                        </div> --}}
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            @error('content')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                            <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                            <trix-editor input="content"></trix-editor>
                        </div>
                        
                        <div class="mb-3">
                            <label for="modul_id" class="form-label">Modul</label>
                            <select class="form-select" name="modul_id" id="modul_id">
                                @foreach ($moduls as $modul)
                                    <option value="{{ $modul->id }}">{{ $modul->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <a href="/dashboard/material" class="btn btn-primary"><span >back to dashboard material</span></a>
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