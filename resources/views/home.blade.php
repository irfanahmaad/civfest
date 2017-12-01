@extends('main_layouts.app')

@section('content')
        <section class="news-hero" style="background:url(img/news-hero.png) no-repeat;">
        	</section>

        	<section class="content">
        		<div class="container-fluid">
        			<div class="row">
        				<div class="set-accessories content-accessories">
        					<img src="img/acc/bird.png" width="150px">
        				</div>
        				<div class="title-content col-xs-12 text-center">
        					<h2><span class="bold">Get ready</span> for civfest 2018</h2>
        					<div class="line-height"></div>
        				</div>
        				<div class="col-xs-12">
                  @foreach ($events as $data)
                  <a href="event/{!! strtolower(str_replace(' ', '-', $data->title)) !!}" class="test">
                    <div class="list-content col-xs-12 col-md-6 col-lg-4">
                      <img src="{{ asset('img/event/'.$data->images) }}" width="50%" align="center">
                      <h2>{{ $data->title }}</h2>
                      <div class="line-height-content"></div>
                    </div>
                  </a>
                  @endforeach
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
        					<h2><span class="bold">Our</span> latest news</h2>
        					<div class="line-height"></div>
        				</div>
        				<div class="col-xs-12">
                  @foreach ($news as $data)
                  <a href="news/detail/{!! strtolower(str_replace(' ', '-', $data->title)) !!}">
                    <div class="news-container col-xs-12 col-md-6">
                      <figure class="news-image">
                        <img src="img/news/{{ $data->images }}" alt="news content">
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
    <!-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif
    </div> -->
