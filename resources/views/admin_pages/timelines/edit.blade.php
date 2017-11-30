@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{$parse['title']}}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Timelines</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-xs-12">
        @if(Session::has('status'))
        <div class="alert alert-success">
          <strong>Success!</strong> {{ Session::get('status') }} <a href="{{ url('events/'.$parse['parent_id'].'/timelines') }}">back to table</a>
        </div>
        @endif
      <form role="form" class="form" method="post" action="{{ url('events/'.$parse['parent_id'].'/timelines/'.$data[0]->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="parent_id" value="{{ $parse['parent_id'] }}">
        <div class="box-body">
          <div class="form-group">
            <label for="title">Title post</label>
            <input type="text" name="title" value="{{ $data[0]->title }}" class="form-control" id="title" placeholder="Enter title" required>
          </div>
          <div class="form-group">
            <textarea class="textarea" id="editor1" name="description" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ $data[0]->description }}</textarea>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    </div>
  </section>
</div>
@endsection
