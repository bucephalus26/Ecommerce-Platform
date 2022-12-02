@extends('layouts.adminbase')

@section('title', 'Product List')

@section('content')


<div class="cardbox" style="height: 1000px; padding-left: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h1>Product List</h1>

        <br>
        <div>
          <a href="{{route('admin.product.create')}}" id="lines" class="btn btn-dark">Add Product</a>
        </div>
        <br>

        <table>
          <thead>
            <tr>
              <th style="width: 10px">Id</th>
              <th>Category</th>
              <th>Title</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Image</th>
              <th>Images</th>
              <th>Status</th>
              <th style="width: 40px">Edit</th>
              <th style="width: 40px">Delete</th>
              <th style="width: 40px">Show</th>
            </tr>
          </thead>
          <tbody>
            <!-- Populating Product table with loop-->
            @foreach( $data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
              <td>{{$rs->title}}</td>
              <td>{{$rs->price}}</td>
              <td>{{$rs->quantity}}</td>
              <!-- if there is image, load it-->
              <td>
                @if ($rs->image)
                <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                @endif
              </td>

              <!-- Link to images page-->
              <!-- pid key used to get product image page-->
              <td><a href="{{route('admin.image.index', ['pid'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                  <img src="{{asset('assets')}}/admin/img/images.jpg" style="height: 40px"></a>
              </td>

              <td>{{$rs->status}}</td>
              <!-- Buttons -->
              <td><a href="{{route('admin.product.edit', ['id'=>$rs->id])}}" id="lines" class="btn btn-info">Edit</a></td>
              <td><a href="{{route('admin.product.destroy', ['id'=>$rs->id])}}" id="lines" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
              <td><a href="{{route('admin.product.show', ['id'=>$rs->id])}}" id="lines" class="btn btn-success">Show</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection