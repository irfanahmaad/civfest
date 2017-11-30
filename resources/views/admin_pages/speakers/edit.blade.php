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
      <li class="active">Speakers</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-xs-12">
        @if(Session::has('status'))
        <div class="alert alert-success">
          <strong>Success!</strong> {{ Session::get('status') }} <a href="{{ url('seminars/'.$parse['parent_id'].'/speakers') }}">back to table</a>
        </div>
        @endif
      <form role="form" class="form" method="post" action="{{ url('seminars/'.$parse['parent_id'].'/speakers/'.$data[0]->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="parent_id" value="{{ $parse['parent_id'] }}">
        <div class="box-body">
          <div class="form-group">
            <label for="name">Name speaker</label>
            <input type="text" name="title" value="{{ $data[0]->name }}" class="form-control" id="name" placeholder="Enter title" required>
          </div>
          <div class="form-group">
            <label for="type">Type</label>
              <select class="form-control" name="type" required>
                <option value="1" {{ ($data[0]->type == 1) ? 'selected' : ''}}>Moderator</option>
                  <option value="0" {{ ($data[0]->type == 0) ? 'selected' : ''}}>Pembicara</option>
              </select>
          </div>
          <div class="form-group">
            <label for="inputFile">Your Images</label>
            <input type="file" name="photo" id="inputFile">

            <p class="help-block" style="font-style: italic;color: red;">this images must 1 x 1</p>

            <img src="{{ asset('img/speaker/'.$data[0]->photo) }}" alt="manage-new-images" />
          </div>
          <div class="form-group">
            <label for="type">Description</label>
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
