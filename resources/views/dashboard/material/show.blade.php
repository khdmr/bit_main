@extends('layouts.sidebar')
@section('container')>

  <main>
    <div class="container container-class" data-aos="fade-up"> 
      <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <h2 class="entry-title">
                {{ $material->title }}
              </h2>
              <p>
                {{ $material->Modul->name }}
              </p>

              <a href="/dashboard/material" class="btn btn-success"><span >back to dashboard material</span></a>
              <a href="/dashboard/material/{{ $material->id }}/edit" class="btn btn-warning"><span >edit</span></a>
              <form action="/dashboard/material/{{ $material->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span>delete</span></button>

              </form>

              <div class="entry-content">
                @if ($material->image)
                <img src="{{ URL::asset('storage/' . $material->image) }}" class="img-fluid" alt="">
                @else
                <img src="{{ URL::asset('assets/img/blog/blog.svg')}}" class="img-fluid" alt="">
                @endif
                  <hr>
                <p>
                    {!! $material->content !!} 
                </p>
              </div>
            </article><!-- End blog entry -->
          </div><!-- End blog entries list -->

          

        </div>

      </div>
    </section><!-- End Blog Single Section -->
  </div>

</div>

  </main><!-- End #main -->
@endsection
