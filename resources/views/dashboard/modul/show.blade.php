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

              <h2 class="entry-title">
                Nama Modul: {{ $modul->name }}
              </h2>
              <p>
                Deskripsi Modul: {{ $modul->description }}
              </p>
              <p>Modul berada di Course:</p>
              <ul>
                @foreach ($modul->Course as $modul)
                <li>{{ $modul->title }}</li>
                @endforeach
              </ul>
             
              <a href="/dashboard/modul" class="btn btn-success"><span >back to dashboard modul</span></a>
              <a href="/dashboard/modul/{{ $modul->id }}/edit" class="btn btn-warning"><span >edit</span></a>
              <form action="/dashboard/modul/{{ $modul->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span>delete</span></button>

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
