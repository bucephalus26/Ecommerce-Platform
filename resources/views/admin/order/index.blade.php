@extends('layouts.adminbase')

@section('title', 'Order List')

@section('content')

<div class="cardbox" style="height: 1000px; padding-left: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h1>Order List</h1>
        <br>

        <table>
          <thead>
            <tr>
              <th style="width: 10px">Id</th>
              <th>User</th>
              <th>Email</th>
              <th>Amount</th>
              <th>Admin Note</th>
              <th>Status</th>
              <th style="width: 40px">Show</th>
              <th style="width: 40px">Cancel</th>
            </tr>
          </thead>
          <tbody>
            <!-- Populating Message table with loop-->
            @foreach( $data as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td><a id="lines" href="{{route('admin.user.show', ['id'=>$rs->user_id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">{{$rs->user->name}}</a></td>
              <td>{{$rs->email}}</td>
              <td>£{{$rs->total}}</td>
              <td>{{$rs->note}}</td>
              <td>{{$rs->status}}</td>

              <!-- Buttons -->
              <td>
                <a id="lines" href="{{route('admin.order.show', ['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm" onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                  Show
                </a>
              </td>
              <td><a id="lines" href="{{route('admin.order.cancelorder', ['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Are you sure you want to cancel?')">Cancel</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection