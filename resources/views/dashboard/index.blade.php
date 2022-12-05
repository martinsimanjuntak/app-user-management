
@extends('layouts.app')

@section('title')
   Profile
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
    <div class="landing-page">
            <h1>Welcome To My Application <p style="color: blue"> {{auth()->user()->name}} </p></h1>  
    </div>
    <div class="deskripsi">
        
    </div>
@endsection
