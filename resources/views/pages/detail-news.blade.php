@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/pages-hero.png') }}) no-repeat;">
  <div class="container">
    <div class="col-xs-12">
      <div class="logo-event">
        <h2>{{ $news[0]->title }}</h2>
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
@endsection
