@extends('layouts.frontbase')

@section('title', 'About Us ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('logo', Storage::url($setting->logo))

@section('content')

    
<section class=" About Us">
        <h1 id="About Us" >About Us</h1>
        <p1> </p1>
        
        <div class="rows">
        <div class="about-col">
        <h3> What We Do</h3>
        <div id="content1"><img src="{{asset('assets')}}/img/sport.png" width="150" height="100" alt=""/></div>
        <p2> Established in the year 2022, Sports4Us is your one-stop sports shop for the biggest brands – browse trainers for men and women. Plus sports fashion, clothing & accessories. We offer a variety of sports, fitness, and lifestyle brands. Our online store offers the latest in athletically-inspired performance products. We ship all across the United Kingdom.</p2>
        </div>
        
        <div class="about-col">
          <h3> Our Mission</h3>
          <div id="content1"><img src="{{asset('assets')}}/img/mission.png" width="150" height="100" alt=""/></div>
          <p3> To develop a successful business by constantly offering a wide range of quality products for sportswear, with the best level of service and in accord with the changing needs of our customers. To contribute to improvements of the nation's health through activating the values of a healthy lifestyle and by improving the quality of life of our customers.</p3>
          
          </div>
        
          <div class="about-col">
            <h3> Our Values</h3>
            <div id="content1"><img src="{{asset('assets')}}/img/value.png" width="150" height="100" alt=""/></div>
        
            <p4> We are a team! We are inspired by the opportunity of realizing ourselves through the achievement of our business's goal. We understand that all our planned successes and achievements, as well as failures, are common ones. We share a common responsibility for business results. We never avoid personal responsibility.</p4>
            
            </div>
        
        </div>
        <section class="location"> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.5734540516632!2d-1.890406084193759!3d52.48685837980789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc9ae4f2e4b3%3A0x9a670ba18e08a084!2sAston%20University!5e0!3m2!1sen!2snl!4v1645421709373!5m2!1sen!2snl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </section>
    </section>





@endsection   