@extends('backend.layouts.admin')
@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      General Form Elements
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Add Slider</a></li>
      <li class="active">General Elements</li>
    </ol>
  </section>
  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <section class="content">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h2 class="box-title">Add New Slider</h2>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form action="{{ Asset('admin/slider') }}" method="post" enctype="multipart/form-data"> 
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" autocomplete='off' placeholder="Enter title" name="tittle">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" autocomplete='off' placeholder="Enter email" name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">path</label>
                        <input type="text" class="form-control" id="path" autocomplete='off' placeholder="Enter path" name="path">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">exception</label>
                        <textarea rows="3" class="form-control" id="exception" autocomplete='off' placeholder="Enter exception" name="exception"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea rows="3" class="form-control" id="description" autocomplete='off' placeholder="Enter description" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">button name</label>
                        <input type="text" class="form-control" id="btn_name" autocomplete='off' placeholder="Enter button name" name="btn_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">position</label>
                        <input type="number" class="form-control" id="position" autocomplete='off' name="position">
                    </div>
          
                </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </div>
        </form>
      </div>
  </section>
</div>
@stop