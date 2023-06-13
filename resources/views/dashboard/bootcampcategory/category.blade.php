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
                Nama Kategori :
                {{ $bootcampcategory->name_category }}
              </h2>

              <a href="/dashboard/bootcampcategory" class="btn btn-success"><span >back to dashboard bootcamp category</span></a>
              <a href="/dashboard/bootcampcategory/{{ $bootcampcategory->id }}/edit" class="btn btn-warning"><span >edit</span></a>
              <form action="/dashboard/bootcampcategory/{{ $bootcampcategory->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span>delete</span></button>

              </form>
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