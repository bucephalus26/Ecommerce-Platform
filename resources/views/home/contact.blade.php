@extends('layouts.frontbase')

@section('title', 'Contact Us ' .$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('logo', Storage::url($setting->logo))

@section('content')


    <section class = "Contact">
        <div class  = "content">
            <h2> Contact Us</h2>
            <h6>Need to get in touch? Fill out the form with your inquiry.</h6>
        </div>
        <div class = "container">
            <div class = "contactInfo">
            <div class = "box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class = "text">
                    <h3>Address</h3>
                    <h7> Aston Street, <br> Birmingham, <br> B4 7ET </h7> 
                </div>
            </div>
            <div class = "box">
                <div class ="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class = "text">
                    <h3>Lets Talk</h3>
                    <h7>01234567890</h7> 
                </div>
            </div>
            <div class = "box">
                <div class ="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class = "text">
                    <h3>General Support</h3>
                    <h7>Support@Sports4Us.com</h7> 
                </div>
            </div>
        </div>
        <div class = "ContactForm">
            <form> <h2> Send Message</h2>
            <div class="InputBox">
                <input type = "text" name =""  required = "required">
                <span> Full Name</span>
            </div>
            <div class="InputBox">
                <input type = "text" name =""  required = "required">
                <span>Email</span>
            </div>
            <div class="InputBox">
                <input type = "text" name =""  required = "required">
                <span> Phone</span>
            </div>
            <div class="InputBox">
                <textarea required = "required"></textarea>
                <span> Type Your Message....</span>
            </div>
            <div class = "InputBox">
                <input type = "submit" name="" value = "Send">
            </div>
            </form>
        </div>
    </div>
    </section>



@endsection   