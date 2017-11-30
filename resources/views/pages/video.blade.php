@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/pages-hero.png') }}) no-repeat;">
  <div class="logo-event">
    <img src="{{ asset('img/logo-event.png') }}" alt="logo-heros">
    <h1>Get satisfying scenery</h1>
  </div>
</section>

<section class="breadcrumb-style">
  <div class="container-fluid">
    <div class="row">
      <div class="main-breadcrumb col-xs-12">
        <p><a href="#">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Video</p>
      </div>
    </div>
  </div>
</section>

<section class="news background-white">
  <div class="container-fluid">
    <div class="row">
      <div class="main-gallery">
        <div class="gallery">
          <a href="{{ asset('img/news/sample-post.jpg') }}" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/news/sample-post.jpg') }}" alt="" title="Beautiful Image" />
          </a>
          <a href="{{ asset('img/news/sample-post.jpg') }}" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/news/sample-post.jpg') }}" alt="" title="Beautiful Image" />
          </a>
          <a href="https://www.youtube.com/embed/qtQgbdmIO30?autoplay=true" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/news/sample-post.jpg') }}" alt="" title="Beautiful Image" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
