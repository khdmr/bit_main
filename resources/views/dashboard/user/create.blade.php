@extends('layouts.sidebar')
@section('container')
    <main>
        <div class="container container-class" data-aos="fade-up"> 
            <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
                <div class="col-lg-8">

                    <form method="POST" action="/dashboard/user" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                          @error('name')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                          @enderror
                        </div>

                        <div class="mb-3">
                            <label for="role_id" class="form-label">Role</label>
                            <select class="form-select" name="role_id" id="role_id">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username') }}">
                          @error('username')
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

                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autofocus value="">
                          @error('password')
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
                        
                    
                        <a href="/dashboard/user" class="btn btn-primary"><span >back to dashboard user</span></a>

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