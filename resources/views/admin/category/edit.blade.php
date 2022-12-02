@extends('layouts.adminbase')

@section('title', 'Edit Category: '.$data->title)

@section('content')


<div class="cardbox" style="height: 1000px; padding-left: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h1>Edit Category: {{$data->title}}</h1>
        <br>

        <!-- Form to update Category Elements -->
        <div class="form">
          <form class="form1" role="form" action="{{route('admin.category.update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <label>Parent Category</label>
            <select class="form-control select2" name="parent_id">
              <!-- 0 for Main category -->
              <option value="0" selected="selected">Main Category</option>
              <!-- get list of categories as datalist-->
              @foreach($datalist as $rs)
              <!-- selected id is used -->
              <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}
              </option>
              @endforeach
            </select>

            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{$data->title}}">

            <label>Keywords</label>
            <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">

            <label>Description</label>
            <input type="text" class="form-control" name="description" value="{{$data->description}}">

            <label>Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image">
                <label class="custom-file-label">Choose Image</label>
              </div>
            </div>

            <label>Status</label>
            <select class="form-control" name="status">
              <option selected>{{$data->status}}</option>
              <option>True</option>
              <option>False</option>
            </select>

            <button type="submit" class="btn btn-info">Update Data</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection