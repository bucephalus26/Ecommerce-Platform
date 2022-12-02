@extends('layouts.frontbase')

@section('title', 'Register')

@section('content')    

<!-- Call to jetstream registration page, which has had its html, css replaced with our own -->
    @include('auth.register');


@endsection

