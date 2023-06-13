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
            <h1 class="text-primary text-center">Material</h1>
                <button class="btn btn-light"><a href="/dashboard/material/create"><span class="">Create New Material</span></a></button>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Nama Modul</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                @foreach ($materials as $material)
                    <tbody>
                    <tr>
                        <th scope="row">{{ $loop ->iteration  }}</th>
                        <td>{{ $material->title}}</td>
                        <td>{!! $material->content!!}</td>
                        <td>{{ $material->Modul->name }}</td>
                        <td>
                            <button class="btn btn-success"><a href="/dashboard/material/{{ $material->id }}"><span class="text-primary">show</span></a></button>
                            <button class="btn btn-warning"><a href="/dashboard/material/{{ $material->id }}/edit"><span class="text-primary">edit</span></a></button>
                            <form action="/dashboard/material/{{ $material->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span>delete</span></button>
                
                              </form>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
              </table>
        </div>
    </div>
   
</main>
@endsection