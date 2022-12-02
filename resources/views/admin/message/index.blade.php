@extends('layouts.adminbase')

@section('title', 'Message List')

@section('content')

<div class="cardbox" style="height: 1000px; padding-left: 50px;">
  <div class="container">
      <div class="row">
        <div class="col-lg-4">
            <h1>Message List</h1>
            <br>
            <table>
              <thead>
                <tr>
                  <th style="width: 10px">Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th style="width: 40px">Show</th>
                  <th style="width: 40px">Delete</th>
                </tr>
              </thead>
              <tbody>
                <!-- Populating Message table with loop-->
                @foreach( $data as $rs)
                <tr>
                  <td>{{$rs->id}}</td>
                  <td>{{$rs->name}}</td>
                  <td>{{$rs->email}}</td>
                  <td>{{$rs->phone}}</td>
                  <td>{{$rs->status}}</td>

                  <!-- Buttons to show and delete-->
                  <td>
                    <a href="{{route('admin.message.show', ['id'=>$rs->id])}}"  id="lines" class="btn btn-success" 
                      onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                        Show
                    </a>
                  </td>
                  <td><a href="{{route('admin.message.destroy', ['id'=>$rs->id])}}" id="lines" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>

        </div>
    </div>
  </div>
</div>


@endsection