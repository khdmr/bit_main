@extends('layouts.sidebar')
@section('container')
  <main id="main">  
    <div class="container container-class" data-aos="fade-up"> 
      <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <h2 class="entry-title">
                Nama User: {{ $user->name }}
              </h2>
              <p>
                Role: {{ $user->Role->role_name }}
              </p>
              <p>
                Username: {{ $user->username }}
              </p>
              <p>
                Email: {{ $user->email }}
              </p>
              
             
              <a href="/dashboard/user" class="btn btn-success"><span >back to dashboard user</span></a>
              <a href="/dashboard/user/{{ $user->id }}/edit" class="btn btn-warning"><span >edit</span></a>
              <form action="/dashboard/user/{{ $user->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span>delete</span></button>

              </form>
            </article><!-- End blog entry -->
          </div><!-- End blog entries list -->

          

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
@endsection
