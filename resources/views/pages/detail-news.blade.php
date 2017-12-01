@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/pages-hero.png') }}) no-repeat;">
  <div class="container">
    <div class="col-xs-12">
      <div class="logo-event detail-news">
        <h1>{{ $news[0]->title }}</h1>
      </div>
    </div>
  </div>
</section>
<div></div>

<section class="breadcrumb-style">
  <div class="container-fluid">
    <div class="row">
      <div class="main-breadcrumb col-xs-12">
        <p><a href="{{ url('/') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{ url('all-news') }}">News</a> <i class="fa fa-angle-right" aria-hidden="true"></i> {{ $news[0]->title }} </p>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="images-detail-news col-xs-12 col-md-6 col-md-offset-2 col-lg-4 col-lg-offset-4">
        <img src="{{ asset('img/news/'.$news[0]->images) }}" width="100%" align="center" alt="images detail news"/>
      </div>
      <div class="description-detail-news col-xs-12 col-md-8 col-md-offset-2">
        <p>
          {!! $news[0]->description !!}
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
