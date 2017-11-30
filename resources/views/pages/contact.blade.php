@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/event-hero.png') }}) no-repeat;">
  <div class="container">
    <div class="col-xs-12">
      <div class="logo-event">
        <img src="{{ asset('img/logo-event.png') }}">
        <h1>Need more info?</h1>
      </div>
    </div>
  </div>
  </section>

<section class="breadcrumb-style">
  <div class="container-fluid">
    <div class="row">
      <div class="main-breadcrumb col-xs-12">
        <p><a href="#">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Contact</p>
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="set-accessories content-accessories">
        <img src="{{ asset('img/acc/bird.png') }}" width="150px">
      </div>
      <div class="title-content col-xs-12 text-center">
        <h2><span class="bold">Know more</span> about me</h2>
        <div class="line-height"></div>
      </div>
      <div class="main-about col-xs-12 col-md-8 col-md-offset-2">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
        <p>
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</section>
@endsection
