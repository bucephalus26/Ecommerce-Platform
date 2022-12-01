@extends('layouts.frontbase')

@section('title', 'Orders Details')

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
                    <h1>Orders Details</h1>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Cancel</th>
                            </tr>
                        </thead>

                            <!-- Looping through each item within order-->
                            <tbody>
                                @foreach($orderproducts as $rs)
                                <tr>
                                <th scope="row"><img src="{{Storage::url($rs->product->image)}}" width="100" height="100"></th>
                                <td>{{$rs->product->title}}</td>
                                <td>£{{$rs->product->price}}</td>
                                <td>{{$rs->quantity}}</td>
                                <td>£{{$rs->amount}}</td>
                                <td><a href="#" class="btn btn-danger">Cancel Order</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                    <p>Total: <span class="price" style="color:black"><b>£{{$order->total}}</b></span></p>
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