@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')




<div class="cardbox" style="height: 1000px; padding-left: 50px;">
  <div class="container">
      <div class="row">
        <div class="col-lg-4">
            <h1>Category List</h1>

            <br>
            <div>
              <a href="{{route('admin.category.create')}}" id="lines" class="btn btn-dark">Add Category</a>
            </div>
            <br>

            <table>
              <thead>
                <tr>
                  <th style="width: 10px">Id</th>
                  <th>Parent</th>
                  <th>Title</th>       
                  <th>Image</th>
                  <th>Status</th>
                  <th style="width: 40px">Edit</th>
                  <th style="width: 40px">Delete</th>
                  <th style="width: 40px">Show</th>
                </tr>
              </thead>
              <tbody>
                <!-- Populating Category table with loop-->
                @foreach( $data as $rs)
                <tr>
                  <td>{{$rs->id}}</td>
                  <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</td>
                  <td>{{$rs->title}}</td>
                  <!-- if there is image, load it-->
                  <td>
                    @if ($rs->image)
                    <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                    @endif
                  </td>

                  <td>{{$rs->status}}</td>

                  <!-- Buttons-->            
                  <td><a href="{{route('admin.category.edit', ['id'=>$rs->id])}}" id="lines" class="btn btn-info">Edit</a></td>
                  <td><a href="{{route('admin.category.destroy', ['id'=>$rs->id])}}" id="lines" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                  <td><a href="{{route('admin.category.show', ['id'=>$rs->id])}}" id="lines" class="btn btn-success">Show</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
  </div>
</div>

@endsection