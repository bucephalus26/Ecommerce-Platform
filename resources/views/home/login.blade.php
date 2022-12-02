@extends('layouts.frontbase')

@section('title', 'Log In')

@section('content')    

<!-- Call to jetstream login page, which has had its html, css replaced with our own -->
    @include('auth.login');


@endsection

