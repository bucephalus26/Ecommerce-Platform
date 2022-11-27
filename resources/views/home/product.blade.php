@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')
<style>
    html{
        height:30vh;
    }
    .carouselslide{
        position:relative;
        height:900px;
        width:750px;
        left:57px;
        top:120px;
    }
    .btn1{     
        position:absolute;
        right:390px;
        bottom: 156px;
        padding-right:6px;
        padding-left:6px;
        line-height: 22.5px;
    }
    .cart_btn{      
        position:absolute;
        right:390px;
        bottom:128px;
        padding-right:4px;
        padding-left:4px;
        line-height: 24px;
    }
    .countforp{   
        position:relative;
        left:1011px;
        bottom:539px;  
        border-style:solid;
        padding-bottom:17.5px;
        width:50px;
        height:54.5px;
        text-align:center;

    }
    .productname{
        position:relative;
        left:1010px;
        bottom:789px;
    }
    .cart{
        position:absolute;
        bottom:128px;
        right:99px;
        color: white;
        background-color: black;
        padding-left: 20px;
        padding-right: 120px;
        font-size: 20px;
    }
    .bargain{
        position: relative;
        bottom:113px;
        font-family: Futura;
        position:relative;
        color:red;
    }
    .font-weight-semi-boldmb-4{
        position:relative;
        top:35px;
    }
    .mb-4{
        position:relative;
        top:30px;
    }
    .line-1 {
        position:relative;
        bottom:780px;
        left:1010px;
        height: 1px;
        width:364px;
        background: black;
    }
    .grid-container {
        position:relative;
        left:1024px;
        bottom: 880px;
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
        left:1010.5px;
        bottom: 625px;
        font-family: Futura;
    }
    .sizeinstock{
        position:relative;
        left:1023px;
        bottom: 880px;
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
</style>
<html>
    <div class="carouselslide">
        <div class="carousel-inner border">
            <img class="w-100 h-100" src="{{Storage::url($data->image)}}" alt="Image">
            @foreach($images as $rs)
            <img class="w-100 h-100" src="{{Storage::url($rs->image)}}" alt="Image">
            @endforeach
            <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
            <i class="fa fa-2x fa-angle-left text-dark"></i>
            </a>
            <a class="carousel-control-next" href="#product-carousel" data-slide="next">
            <i class="fa fa-2x fa-angle-right text-dark"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-7 pb-5">
        <div class="productname">
            <h3>{{$data->title}}</h3>
            <h3 class="font-weight-semi-boldmb-4">£{{$data->price}}</h3>
            <p class="mb-4">{{$data->description}}</p>
            <h5 class="bargain"> Reduced to clear </h5>
        </div>
        <div class="line-1"></div>
        <button class="btn1" onclick="counterDec()">-</button>
        <div class="countforp"> 0  </div>
        <button class="cart_btn" onclick="counterInc()">+</button >
        <h5 class="quantity" >Quantity</h5>
        <button class="cart"><h6 style="display: inline-block;padding:12.9px 40px 10px 0px;">Add to cart</h6></button>       
    </div>
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
    <footer>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                        <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Details</h4>
                        <p class="mb-31">{!!$data->detail!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>
@endsection