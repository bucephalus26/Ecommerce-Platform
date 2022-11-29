@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <!-- Page Header Start -->
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">{{$data->category->title}}</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-3">-</p>
                <p class="m-0">{{$data->category->title}}</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{Storage::url($data->image)}}" alt="Image">
                        </div>
                        @foreach($images as $rs)
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{Storage::url($rs->image)}}" alt="Image">
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

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">{{$data->title}}</h3>
                <h3 class="font-weight-semi-bold mb-4">£{{$data->price}}</h3>
                <p class="mb-4">{{$data->description}}</p>

                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="counter">
                            <button class="cart_btn" onclick="counterDec()">-</button>
                            <h5 id="counter">0</h5>
                            <button class="cart_btn" onclick="counterInc()">+</button >
                            <button class="cart">Add to cart</button>
                        </div>
                    </div>
                </div>           
            </div>
        </div>


        <!-- Product Description Start -->
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Details</h4>
                        <p>{!!$data->detail!!}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Description End -->
    </div>
     <!-- Product Detail End -->


@endsection