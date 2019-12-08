<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Doggax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    @include('themes.frontend.components.head')
</head>
<body>

<div id="app">
    @yield('slider', View::make('themes.frontend.components.slider'))
    @yield('menu', View::make('themes.frontend.components.menu'))
    @yield('main-menu', View::make('themes.frontend.components.main-menu'))
    @yield('content', View::make('themes.frontend.components.gallery'))
    @yield('footer', View::make('themes.frontend.components.footer'))
    @yield('copyright', View::make('themes.frontend.components.copyright'))

</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
@include('themes.frontend.components.scripts')

</body>
</html>
