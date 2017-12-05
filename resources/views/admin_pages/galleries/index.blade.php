@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{$parse['title']}} <a href="{{ url('galleries/create') }}" class="btn btn-primary btn-flat" style="margin-left: 20px;">Add new</a>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Galleries</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-xs-12">
        @if(Session::has('status'))
        <div class="alert alert-success">
          <strong>Success!</strong> {{ Session::get('status') }}
        </div>
        @endif
        <!-- small box -->
        <div class="small-box bg-aqua" style="padding-bottom: 15px;">
          <div class="inner">
            <h3>{{ $galleries->count() }}</h3>

            <p>Image count</p>
          </div>
          <div class="icon">
            <i class="fa fa-calendar"></i>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Galleries</h3>
          </div>
          <!-- /.box-header -->
          <!-- body -->
          <div class="container-fluid">
            <div class="row">
              @foreach($galleries as $data)
              <div class="col-md-3 text-center">
                <label>{{ $data->title }}</label>
                <img src="{{ asset('img/galleries/'.$data->images) }}" class="img-responsive" align="center">
                <div style="padding:10px;">
                  <div class="btn btn-danger btn-flat btn-xs">
                    <!-- <a href="{{ url('news/destroy/'.$data->id) }}">Drop post</a> -->
                    <a style="text-decoration:none; color:#fff;" href="{{ url('galleries/'.$data->id) }}"
                        onclick="event.preventDefault();
                                 document.getElementById('delete-form-galleries-{{$data->id}}').submit();">
                      <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                      <span>Drop image</span>
                    </a>
                    <form id="delete-form-galleries-{{$data->id}}" method="post" action="{{ url('galleries/'.$data->id) }}" style="display: none;">
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ csrf_field() }}
                    </form>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
