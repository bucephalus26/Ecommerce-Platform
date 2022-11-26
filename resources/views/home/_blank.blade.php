@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('logo', Storage::url($setting->logo))

@section('content')

@endsection   