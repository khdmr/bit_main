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
            <h1 class="text-primary text-center">Bootcamp Category</h1>
                <button class="btn btn-light"><a href="/dashboard/bootcampcategory/create"><span class="">Create New Category</span></a></button>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                @foreach ($categories as $category)
                    <tbody>
                    <tr>
                        <th scope="row">{{ $loop ->iteration  }}</th>
                        <td>{{ $category->name_category}}</td>
                        <td>
                            <button class="btn btn-success"><a href="/dashboard/bootcampcategory/{{ $category->id }}"><span class="text-primary">show</span></a></button>
                            <button class="btn btn-warning"><a href="/dashboard/bootcampcategory/{{ $category->id }}/edit"><span class="text-primary">edit</span></a></button>
                            <form action="/dashboard/bootcampcategory/{{ $category->id }}" method="POST">
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