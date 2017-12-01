@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/pages-hero.png') }}) no-repeat;">
  <div class="logo-event">
    <img src="{{ asset('img/logo-event.png') }}" alt="logo-heros">
    <h1>Get more knowledge here</h1>
  </div>
</section>
<section class="breadcrumb-style">
  <div class="container-fluid">
    <div class="row">
      <div class="main-breadcrumb col-xs-12">
        <p><a href="#">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> News</p>
      </div>
    </div>
  </div>
</section>
<section class="news">
  <div class="container-fluid">
    <div class="row">
      <div class="set-accessories content-accessories">
        <img src="{{ asset('img/acc/accessories-2.png') }}" width="150px">
      </div>
      <div class="title-content col-xs-12 text-center">
        <h2><span class="bold">News</span></h2>
        <div class="line-height"></div>
      </div>
      <div class="col-xs-12">
        @foreach ($news as $data)
        <a href="#">
          <div class="news-container col-xs-12 col-lg-6">
            <figure class="news-image">
              <img src="{{ asset('img/news/'.$data->images) }}" alt="news content">
              <figcaption>{{ date('d M Y', strtotime($data->created_at)) }}</figcaption>
            </figure>
            <div class="news-item">
              <h2>{{ $data->title }}</h2>
              <p>
                {{ $data->description }}
              </p>
            </div>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection
