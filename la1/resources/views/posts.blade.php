@extends('themes.frontend.layout')

@section('slider')
    @endsection

@section('content')
    <div class="container">
        @foreach( $posts as $post )
            <div class="row">
                <div class="col-lg-4">
                    {{$post->name}}
                </div>
                <div class="col-lg-8">
                    {{$post->description}}
                </div>
            </div>
        @endforeach
    </div>
    @endsection
