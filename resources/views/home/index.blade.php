@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('logo', Storage::url($setting->logo))

@section('content')


    <br>


    <h1>Sports4Us</h1>



    <p>Explore this season's latest trends with the collection from Sports4Us.<br> <br>
    Whether you're looking to elevate your gym workouts with our t-shirts, thermal tops and joggers, 
    or to dress casually, our range of clothing is decked out with the latest wardrobe essentials. <br><br>
    Discover your personal aesthetic with our gymwear like our  that meld both fashion and function. 
    From men's trainers to tops, find a style that suits your aesthetic. 
    </p>
            
    <body style="text-align: center; padding-top: 80px">



    <div class="textonhomepage">
    <br>
        <div id='image1'> <div class="bottom-left"> <h1>Shop for Equipment</h1></div> 
        <div class="bottom-left-two"><button class="button"><a href="equipment.php">Shop Now</a></button></div>
        
        </div>

    <br><br><br>


    <div class="image2">
        <div>
            <img src="{{asset('assets')}}/img/mens.jpeg" style="width:700px; height: 700px;">
        </div>
    </div>

    <br><br>
    <br>
    <br><br>
    <br><br><br>
    <br>


    <div class="bottom-right"> <h1>Shop for Men</h1></div> 
        <p> Explore this season's latest trends with the collection from Sports4Us.<br> <br>
    Whether you're looking to elevate your gym workouts with our t-shirts, thermal tops and joggers, 
    or to dress casually, our </p>
        <div class="bottom-left-two"><button class="buttontwo"><a href="men.php">Shop Now</a></button></div>


    <br><br><br><br><br><br><br><br><br><br><br>


    <div class="image3">
        <div>
            <img src="{{asset('assets')}}/img/womens.jpg " style="width:700px; height: 700px;">
        </div>
    </div>


    <br><br><br><br><br><br><br><br><br><br><br>


    <div class="bottom-right"> <h1>Shop for Women</h1></div> 
        <p> e this season's latest trends with the collection from Sports4Us.<br> <br>
    Whether you're looking to elevate your gym workouts with our t-shirts, thermal tops and joggers, 
    or to dress casually, our </p>
    <div class="bottom-left-two"><button class="buttontwo"><a href="women.php">Shop Now</a></button></div>
        


    <br><br><br><br><br><br>

@endsection