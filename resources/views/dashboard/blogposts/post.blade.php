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
                <a href="blog-single.html">{{ $blogpost->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i>By {{ $blogpost->user->name }}</li>
                </ul>
              </div>

              <a href="/dashboard/blogposts" class="btn btn-success"><span >back to dashboard blogpost</span></a>
              <a href="/dashboard/blogposts/{{ $blogpost->id }}/edit" class="btn btn-warning"><span >edit</span></a>
              <form action="/dashboard/blogposts/{{ $blogpost->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span>delete</span></button>

              </form>

              <div class="entry-content">
                @if ($blogpost->image)
                <img src="{{ URL::asset('storage/' . $blogpost->image) }}" class="img-fluid" alt="">
                @else
                <img src="{{ URL::asset('assets/img/blog/blog.svg')}}" class="img-fluid" alt="">
                @endif
                  <hr>
                <p>
                    {!! $blogpost->content !!} 
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

