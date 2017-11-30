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
      <li class="active">event</li>
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
      <form role="form" class="form" method="post" action="{{ url('events') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label for="title">Title event</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" required>
          </div>
          <div class="form-group">
            <label for="sub_title">Subtitle event</label>
            <input type="text" name="sub_title" class="form-control" id="sub_title" placeholder="Enter subtitle" required>
          </div>
          <div class="form-group">
            <label for="link_register">Link Registrasi</label>
            <input type="text" name="link_register" class="form-control" id="link_register" placeholder="Enter link register" required>
          </div>
          <div class="form-group">
            <label for="link_tor">Link Tor</label>
            <input type="text" name="link_tor" class="form-control" id="link_tor" placeholder="Enter link tor" required>
          </div>
          <div class="form-group">
            <label for="inputFile">Your Images</label>
            <input type="file" name="images" id="inputFile" required>

            <p class="help-block" style="font-style: italic;color: red;">this images must 1 x 1</p>
          </div>
          <div class="form-group">
            <textarea class="textarea" name="description" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
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
