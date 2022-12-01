@extends('layouts.frontbase')

@section('title', 'My Orders')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="row">
    <div class="col-75">
        <div class="containerCK">
                <!-- Order Details-->
                <div class="mt-5 text-center">
                    <h1>My Orders</h1>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Show</th>
                            <th scope="col">Cancel</th>
                            </tr>
                        </thead>

                            <!-- Looping through orders-->
                            <tbody>
                                @foreach($data as $rs)
                                <tr>
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('userhome.orderdetail', ['id'=>$rs->id])}}" class="btn btn-secondary">Show Order</a></td>

                                <td>
                                @if($rs->status=="New") <!-- if already accepted, cannot cancel -->
                                    <a href="{{route('userhome.cancelorder', ['id'=>$rs->id])}}" class="btn btn-danger">Cancel Order</a>
                                @endif
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection