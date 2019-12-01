@extends('themes.frontend.layout')

@section('header')
    header
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
@endsection

@section('left-sidebar')
    left side bar
@endsection

@section('content')
    content
@endsection

@section('footer')
    footer
@endsection
