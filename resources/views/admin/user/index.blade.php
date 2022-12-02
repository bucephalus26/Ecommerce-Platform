@extends('layouts.adminbase')

@section('title', 'User List')

@section('content')


<div class="cardbox" style="height: 1000px; padding-left: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h1>User List</h1>

        <table>
          <thead>
            <tr>
              <th style="width: 10px">Id</th>
              <th>Name</th>
              <th>Email</th>
              <th style="width: 150px;">Role</th>
              <th style="width: 40px">Show</th>
              <th style="width: 40px">Delete</th>
            </tr>
          </thead>
          <tbody>
            <!-- Populating user table with loop-->
            @foreach( $data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td>{{$rs->name}}</td>
              <td>{{$rs->email}}</td>
              <td>
                @foreach($rs->roles as $roles)
                {{$roles->name}}
                @endforeach
              </td>
              <!-- Buttons -->
              <td>
                <a id="lines" href="{{route('admin.user.show', ['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm" onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                  Show
                </a>
              </td>
              <td><a id="lines" href="{{route('admin.user.destroy', ['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection