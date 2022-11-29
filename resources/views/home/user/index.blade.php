@extends('layouts.frontbase')

@section('title', 'User Home')

@section('content')

       
<section class=" About Us">
        <h1 >User Home Page</h1>
        
        <div class="row" style="display: block;">
            <div class="about-col">
            <h3>User Menu</h3>
            <ul style="list-style: none; padding-left:0;">
                <li><a href=""><i class="fa fa-user-o"></i> My Profile</a></li>
                <li><a href=""><i class="fa fa-heart-o"></i> My Orders</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                <li><a href="/logout"><i class="fa fa-user-plus"></i> Logout</a></li>
            </ul>
        </div>
        <div class="row">
            @include('profile.show')
        </div>
    </section>

<style>
    a { color: black; } 
</style>

@endsection