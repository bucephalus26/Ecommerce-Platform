@extends('layouts.adminbase')

@section('title', 'Settings')

@section('content')

<div class="cardbox" style="height: 1000px; padding-left: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1>Settings</h1>
                <br>

                <!-- Main content - Form that takes information for Website Settings -->
                <div class="form">
                    <form class="form1" role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                        <label>Title</label>
                        <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">

                        <label>Keywords</label>
                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">

                        <label>Description</label>
                        <input type="text" name="description" value="{{$data->description}}" class="form-control">

                        <label>Company</label>
                        <input type="text" name="company" value="{{$data->company}}" class="form-control">

                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{$data->address}}">

                        <label>Phone</label>
                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control">

                        <label>Email</label>
                        <input type="text" name="email" value="{{$data->email}}" class="form-control">

                        <label>Status</label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                            <option selected="selected">{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>

                        <label for="exampleInputFile">Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="logo">
                                <label class="custom-file-label" for="exampleInputFile">Choose Logo</label>
                                </dßiv>
                            </div>
                            <br>

                            <!-- Submit button -->
                            <button type="submit" id="lines" class="btn btn-info">Update Settings</button>
                    </form>
                    <!-- End of form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection