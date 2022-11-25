@extends('layouts.frontbase')

@section('title', $category->title . ' Products')

@section('content')

        <!-- Header start -->
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Products</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-3">-</p>
                <p class="m-0">{{$category->title}}</p>
            </div>
        </div>
        <!-- Header end -->
  

         <!-- Product card start -->
        <div class="row px-xl-4">
            <div>
                <div class="row pb-3">
                    @foreach($products as $rs)
                    <div class="col-lg-3 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{Storage::url($rs->image)}}">
                            </div>
                            <div class="card-body text-center p-0 pt-4 pb-3">
                                <h6 class="mb-3">{{$rs->title}}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>{{'£'.$rs->price}}</h6><h6 class="text-muted ml-2"><del>{{'£'.$rs->price * 1.10}}</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="{{route('product', ['id'=>$rs->id])}}" class="btn btn-sm text-dark p-0"><i></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Product card end -->
    
@endsection   