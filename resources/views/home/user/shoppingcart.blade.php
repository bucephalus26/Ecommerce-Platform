@extends('layouts.frontbase')

@section('title', 'Shopping Cart')

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
<br>
<br>
<br>
<br>

<div class="row">
    <div class="col-75">
        <div class="containerCK">
            <form action="/action_page.php">
                <!-- Cart Details-->
                <div class="mt-5 text-center">
                    <div class="col-50">
                        <h1>Shopping Cart</h1>
                        <br>
                        @php
                            $totalprice=0
                        @endphp
                        <!-- Looping through all items in cart -->
                        @foreach($data as $rs)
                        <form action="{{route('shoppingcart.update',['id' => $rs->id])}}" method="post">
                            @csrf


                            <img src="{{Storage::url($rs->product->image)}}" style="width:150px; height:150px;" class="thumbnail">
                            <p>
                                <a href="#">{{$rs->product->title}}</a><br>
                                <span class="price">Price: £{{$rs->product->price}}</span>

                                <!-- Quantity - allows user to change quantity of item -->
                                
                                <span class="price">Quantity: 
                                    <!-- onchange submits data -->
                                    <input  name="quantity" type="number" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}" onchange="this.form.submit()">
                                </span>
                            </p>
                            
                            <!-- To remove item from cart -->
                            <span>
                                <a href="{{route('shoppingcart.destroy', ['id'=>$rs->id])}}"><i class="fa fa-close"></i></a>
                            </span>
                            <br>
                            <br>
                            <!-- calculating total price -->
                            @php
                                $totalprice += $rs->product->price*$rs->quantity;
                            @endphp
                            </form>
                        @endforeach
                        <hr>
                        <p>Total: <span class="price" style="color:black"><b>£{{$totalprice}}</b></span></p>
                        </div>
                        </div>
                        <input type="submit" value="Continue to checkout" class="btnCK" >
                        
                    </div>
                </div>
            </form>
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

@endsection