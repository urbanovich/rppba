<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HMVC</title>

    @include('themes.frontend.components.head')
</head>
<body>
<div class="container">
    @include('themes.frontend.components.header')
    @include('themes.frontend.components.content')
    @include('themes.frontend.components.footer')
</div>
@include('themes.frontend.components.scripts')
</body>
</html>
