@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/pages-hero.png') }}) no-repeat;">
  <div class="logo-event">
    <!-- <img src="{{ asset('img/logo-event.png') }}" alt="logo-heros"> -->
    <h1 class="judul-hero">Get satisfying scenery</h1>
  </div>
</section>

<section class="breadcrumb-style">
  <div class="container-fluid">
    <div class="row">
      <div class="main-breadcrumb col-xs-12">
        <p><a href="#">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> about</p>
      </div>
    </div>
  </div>
</section>
<style type="text/css">
  .gallery a {
    padding: 10px;
  }
</style>
<section class="news background-white">
  <div class="container-fluid">
    <div class="row">
      <div class="main-gallery">
        <div class="gallery">
          @foreach ($galleries as $data)
          <a href="{{ asset('img/galleries/'.$data->images) }}" class="col-xs-12 col-sm-6 col-md-4">
            <img style="padding:10px;" src="{{ asset('img/galleries/'.$data->images) }}" alt="" title="{{ $data->title }}" />
          </a>
          @endforeach
        </div>
        <div class="col-xs-12">
          {{ $galleries->links() }}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
