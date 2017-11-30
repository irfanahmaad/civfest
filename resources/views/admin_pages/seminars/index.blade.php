@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{$parse['title']}} <a href="{{ url('seminars/create') }}" class="btn btn-primary btn-flat" style="margin-left: 20px;">Add new</a>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">seminars</li>
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
            <h3>{{ $seminars->count() }}</h3>

            <p>seminars count</p>
          </div>
          <div class="icon">
            <i class="fa fa-calendar"></i>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">seminars</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Title</th>
                <th>Action</th>
                <th>Manage speakers</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($seminars as $data)
              <tr>
                <td>{{ ++$loop->index }}</td>
                <td>{{ $data->title }}</td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger btn-flat">Action</button>
                    <button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{{ url('seminars/'.$data->id.'/edit') }}">Manage</a></li>
                      <li>
                        <!-- <a href="{{ url('seminars/destroy/'.$data->id) }}">Drop post</a> -->
                        <a href="{{ url('seminars/'.$data->id) }}"
                            onclick="event.preventDefault();
                                     document.getElementById('delete-form-seminars-{{$data->id}}').submit();">
                          <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                          <span class="hidden-xs">Drop post</span>
                        </a>
                        <form id="delete-form-seminars-{{$data->id}}" method="post" action="{{ url('seminars/'.$data->id) }}" style="display: none;">
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                  </div>
                </td>
                <td><a href="{{ url('seminars/'.$data->id.'/speakers') }}" class="btn btn-danger btn-flat">speakers</a></td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
