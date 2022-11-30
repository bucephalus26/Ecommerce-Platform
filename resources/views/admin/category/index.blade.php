@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <a href="{{route('admin.category.create')}}" class="btn btn-block bg-gradient-info" style="width: 200px" >Add Category</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Category List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Category List</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
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
              <td><a href="{{route('admin.category.edit', ['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm">Edit</a></td>
              <td><a href="{{route('admin.category.destroy', ['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm"
                    onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
              <td><a href="{{route('admin.category.show', ['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm">Show</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection