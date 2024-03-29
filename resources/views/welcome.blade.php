@extends('layouts.layout')

@section('welcome')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <img src="img/logo.jpg" alt="logo">
            <div class="title m-b-md">
                The North's Best Pizza
            </div>
        </div>
    </div>
@endsection