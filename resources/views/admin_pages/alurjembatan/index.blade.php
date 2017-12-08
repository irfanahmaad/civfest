@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{$parse['title']}} <a href="{{ url('alur-jembatan/create') }}" class="btn btn-primary btn-flat" style="margin-left: 20px;">Upload new</a>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Alur Jembatan</li>
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
      </div>
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Your current alur jembatan section</h3>
            </div>
          <!-- body -->
            <div class="container-fluid">
              <div class="row">
                <img src="{{ asset('img/alur/alur-jembatan.png') }}" alt="alur jembatan" width="100%" />
              </div>
            </div>
          <!-- /.box-body -->
          </div>
      </div>
    </div>
  </section>
</div>
@endsection
