@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')


<div class="cardbox" style="height: 1000px; padding-left: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h1>Add Category</h1>
        <br>

        <!-- Form to create Category -->
        <div class="form">
          <form class="form1" role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Main category selection -->
            <label>Parent Category</label>
            <select class="form-control select2" name="parent_id">
              <!-- 0 for Main category -->
              <option value="0" selected="selected">Main Category</option>
              <!-- Select other categories using getParentsTree function-->
              @foreach($data as $rs)
              <option value="{{ $rs->id }}">{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</option>
              @endforeach
            </select>

            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">

            <label>Keywords</label>
            <input type="text" class="form-control" name="keywords" placeholder="Keywords">

            <label>Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description">

            <label>Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image">
                <label class="custom-file-label">Choose Image</label>
              </div>
            </div>

            <label>Status</label>
            <select class="form-control" name="status">
              <option>True</option>
              <option>False</option>
            </select>

            <button type="submit" class="btn btn-info">Save</button>

          </form>
        </div>
      </div>
    </div>


@endsection