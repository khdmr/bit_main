@extends('layouts.sidebar')

@section('container')
<!-- End Header -->

  <main>
    <div class="container container-class" data-aos="fade-up"> 
      <div class="rounded p-5 shadow bg-white" data-aos="zoom-in">
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <h2 class="entry-title">
                {{ $course->title }}
              </h2>
              <p>{{ $course->CourseCategory->name_category}}</p>

              
              <div class="entry-content">
                <p>
                    {!! $course->summary !!} 
                </p>
                @if ($course->image)
                <img src="{{ URL::asset('storage/' . $course->image) }}" class="img-fluid" alt="">
                @else
                <img src="{{ URL::asset('assets/img/blog/blog.svg')}}" class="img-fluid" alt="">
                @endif
                <hr>
                <p>
                    {!! $course->description !!}
                </p>
                <p>
                  Harga: Rp{{ $course->price }}
                </p>
              </div>
              <a href="/dashboard/bootcamp" class="btn btn-success"><span >back to dashboard blogpost</span></a>
              <a href="/dashboard/bootcamp/{{ $course->id }}/edit" class="btn btn-warning"><span >edit</span></a>
              <form action="/dashboard/bootcamp/{{ $course->id }}" method="POST">
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
