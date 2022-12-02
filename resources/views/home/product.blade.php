@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')
<style>
    html{
        height:30vh;
    }
    .carousel-innerborder{
        position:relative;
        height:675px;
        width:750px;
        left:57px;
        top:120px;
    }
    .btn1{     
        position:absolute;
        right:390px;
        bottom: 155.5px;
        padding-right:6px;
        padding-left:6px;
        line-height: 23px;
    }
    .cart_btn{      
        position:absolute;
        right:390px;
        bottom:128px;
        padding-right:4px;
        padding-left:4px;
        line-height: 25px;
    }
    .countforp{   
        position:relative;
        left:1010px;
        bottom:290px;  
        border-style:solid;
        padding-bottom:17.5px;
        width:50px;
        height:54.5px;
        text-align:center;
    }
    .productname{
        position:relative;
        left:1010px;
        bottom:589px;
    }
    .cart{
        position:relative;
        bottom:386px;
        left:1060px;
        color: white;
        background-color: black;
        padding-left: 20px;
        padding-right: 120px;
        font-size: 20px;
    }
    .bargain{
        position: relative;
        bottom:61px;
        font-family: Futura;
        position:relative;
        color:red;
    }
    .font-weight-semi-boldmb-4{
        position:relative;
        top:60px;
    }
    .mb-4{
        position:relative;
        top:50px;
    }
    .line-1 {
        position:relative;
        bottom:590px;
        left:1010px;
        height: 1px;
        width:364px;
        background: black;
    }
    .grid-container {
        position:relative;
        left:1024px;
        bottom: 680px;
        display: grid;
        width:320px;
        grid-template-columns: auto auto auto auto auto;
        gap: 5px;
        background-color: white;
    }

    .grid-container > div {
        padding-top:7px;
        width: 60px;
        height:40px;
        background-color: white;
        color:black;
        border: 1px solid black;
        text-align: center;
        font-size: 15px;
    }
    .quantity{
        position:relative;
        left:1009.5px;
        bottom: 385px;
        font-family: Futura;
    }
    .sizeinstock{
        position:relative;
        left:1023px;
        bottom: 674px;
        font-family: Futura;

    }
    .mb-3{
        position:relative;
        top:10px;
        left:100px;
    }
    .mb-31{
        position:relative;
        left:100px;
    }
    .producttitle{
        position:relative;
        top:45px;
    }
    .tab-panefadeshowactive{
        position:relative;
        top:20px;
    }
    .input{
        position:relative;
        width:50px;
        border: 4px solid black;
        line-height:46px;
        left:1011px;
        bottom:300px;
        text-align:center;
    }
</style>
<html>
    <div class="col-lg-5 pb-5">
        <div id="product-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-innerborder">
                <div class="carousel-item active">
                    <img  class="w-100 h-100" src="{{Storage::url($data->image)}}" alt="Image">
                </div>
                @foreach($images as $rs)
                <div style="width:592px; height:592px;" class="carousel-item">
                    <img style="width:592px; height:592px;" class="w-100 h-100" src="{{Storage::url($rs->image)}}" alt="Image">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                <i class="fa fa-2x fa-angle-left text-dark"></i>
            </a>
            <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                <i class="fa fa-2x fa-angle-right text-dark"></i>
            </a>
        </div>
    </div>
    <div class="productname">
        <h3 class="producttitle">{{$data->title}}</h3>
        <h3 class="font-weight-semi-boldmb-4">£{{$data->price}}</h3>
        <p class="mb-4">{{$data->description}}</p>
        <h5 class="bargain"> Reduced to clear </h5>
    </div>
    <div class="line-1"></div>
    <input class="input" name="quantity" type="number" value="1" min="1" max="5">
    <h5 class="quantity" >Quantity</h5>
    <button class="cart"><h6 style="display: inline-block;padding:12.9px 40px 10px 0px;">Add to cart</h6></button>                   
    <h5 class="sizeinstock" >Choose size in stock</h5>
    <div class="grid-container">
        <div>7</div>
        <div>7.5</div>
        <div>8</div>  
        <div>8.5</div>
        <div>9</div>
        <div>9.5</div>
        <div>10</div>
        <div>10.5</div>
    </div>
    <div class="nav nav-tabs justify-content-center border-secondary mb-4">
         <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
    </div>
    <div class="tab-panefadeshowactive" id="tab-pane-1">
        <h4 class="mb-3">Product Details</h4>
        <p class="mb-31">{!!$data->detail!!}</p>
    </div>       
</html>
@endsection