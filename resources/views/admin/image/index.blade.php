@extends('layouts.adminwindow')

@section('title', 'Product Images')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-header">
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$product->title}} Images</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('admin.image.create')
                    <br>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- Each image in database table given own field -->
                        @foreach( $images as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}} </td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 200px">
                                    @endif
                                </td>
                                <td><a href="{{route('admin.image.destroy', ['pid'=>$product->id,'id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm"
                                       onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </section>
    </div>
@endsection