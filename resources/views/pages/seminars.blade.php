@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/event-hero.png') }}) no-repeat;">
  <div class="container">
    <div class="col-xs-12">
      <div class="logo-event">
        <img src="{{ asset('img/seminars/'.$seminars[0]->images) }}">
        <h1>{{ $seminars[0]->title }}</h1>
      </div>
    </div>
  </div>
  </section>

  <section class="breadcrumb-style">
    <div class="container-fluid">
      <div class="row">
        <div class="main-breadcrumb col-xs-12">
          <p><a href="{{ url('/') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{ url('event') }}">Event</a> <i class="fa fa-angle-right" aria-hidden="true"></i>Seminar Nasional</p>
        </div>
      </div>
    </div>
  </section>

<section class="tentang-lomba">
  <div class="container">
    <div class="row">
      <div class="set-accessories content-accessories-right">
        <img src="{{ asset('img/acc/pineapples.png') }}" width="150px">
      </div>
      <div class="col-xs-12 title-content text-center">
        <h2><b>Tentang</b> Seminar</h2>
        <div class="line-height"></div>
      </div>
      <div class="col-xs-12">
        <div class="event-content">
          {!! $seminars[0]->description !!}
        </div>
      </div>
    </div>
  </div>
</section>

<section class="formulir-tor">
  <div class="container">
    <img id="ornamen" class="ornamen-left acc" src="{{ asset('img/acc/accessories-2.png') }}" width="500px">
    <img id="ornamen" class="ornamen ornamen-right" src="{{ asset('img/acc/accessories-1.png') }}" width="500px">
    <div class="row">
      <div class="col-xs-12 title-content text-center">
        <h2><b>Pembicara</b> Seminar</h2>
        <div class="line-height"></div>
      </div>
      <div class="col-xs-12">
        <div class="event-content">
          @foreach ($speaker as $data )
          <div class="col-md-4">
            <div class="speaker">
              <img src="{{ asset($data->photo) }}">
              <h4>{{$data->name}}</h4>
              <div class="line-height margin-10"></div>
              <p>
                {!! $data->description !!}
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <div class="col-xs-12 title-content text-center">
        <h2><b>Moderator</b> Seminar</h2>
        <div class="line-height"></div>
        <div class="event-content">
          @foreach ($moderator as $data)
          <div class="col-md-4">
            <div class="speaker">
              <img src="{{ asset($data->photo) }}">
              <h4>{{ $data->name }}</h4>
              <div class="line-height margin-10"></div>
              <p>
                {!! $data->description !!}
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<section class="alur-lomba">
  <img id="ornamen" class="ornamen-right acc" src="{{ asset('img/acc/bird.png') }}">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 text-center title-content">
        <h2><b>Pendaftaran</b> Seminar</h2>
        <div class="line-height"></div>
      </div>
      <div class="col-xs-12 regis-text">
        <div class="row text-center">
    			<div class="col-md-4">
    				<div class="icon-register fa fa-pencil"></div>
    				<div>
    					<a href="#" class="tombol tombol-success">REGISTER</a>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="icon-register fa fa-upload"></div>
    				<div>
    					<a href="#" class="tombol tombol-primary">UPLOAD BUKTI</a>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="icon-register fa fa-search"></div>
    				<div>
    					<a href="#" class="tombol tombol-danger">CEK STATUS</a>
    				</div>
    			</div>
    		</div>
      </div>
    </div>
  </div>
</section>

<section class="waktu">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="col-xs-12 title-content text-center">
          <h2><b>Waktu</b> dan Tempat</h2>
          <div class="line-height"></div>
        </div>
        <div class="col-xs-12">
          <div class="text-center list-content tempat">
            <i class="fa fa-map-marker"></i> Politeknik Negeri Jakarta
          </div>
          <div class="text-center list-content tempat"><i class="fa fa-calendar"></i> 2018</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-xs-12 title-content text-center">
          <h2><b>Contact</b> Person</h2>
          <div class="line-height"></div>
        </div>
        <div class="col-xs-12">
          <div class="text-center list-content tempat">
            <i class="fa fa-phone"></i> 08xx xxxx xxxx (Anonim)
          </div>
          <div class="text-center list-content tempat">
            <i class="fa fa-phone"></i> 08xx xxxx xxxx (Anonim)
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
