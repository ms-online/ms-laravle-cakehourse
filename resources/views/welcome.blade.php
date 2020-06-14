@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

<div class="content">
    <img src="/img/misscake.png" alt=" logo">
    <div class="title m-b-md">
        Misscake-蛋糕房
    </div>
</div>
</div>

@endsection

