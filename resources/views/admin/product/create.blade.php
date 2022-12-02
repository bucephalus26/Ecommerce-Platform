@extends('layouts.adminbase')

@section('title', 'Add Product')

@section('content')

<div class="cardbox" style="height: 1000px; padding-left: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h1>Add Product</h1>
        <br>


        <div class="form">
          <form class="form1" role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
            @csrf


            <!-- Main category selection -->
            <label>Parent Product</label>
            <select class="form-control select2" name="category_id" style="width: 100%;">
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

            <label>Price</label>
            <input type="number" class="form-control" name="price" value="0">

            <label>Quantity</label>
            <input type="tenumberxt" class="form-control" name="quantity" value="0">

            <label>Minimum Quantity</label>
            <input type="tenumberxt" class="form-control" name="minquantity" value="0">

            <label>Details</label>
            <textarea class="form-control" name="detail"></textarea>

            <label>Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image">
                <label class="custom-file-label">Choose Image</label>
              </div>

              <label>Status</label>
              <select class="form-control" name="status">
                <option>True</option>
                <option>False</option>
              </select>

              <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection