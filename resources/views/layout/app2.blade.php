<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="theme-color" content="#F9136B">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#F9136B">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#F9136B">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rotaract District 9125, Nigeria.') }}</title>
    {{--    <link rel="icon" href="{{ asset('images/rotaract_district9125.png') }}" type="image/png">--}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
    <link href="{{ asset('css/jplayer.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">


</head>
<body class="home">
@yield('header')
@yield('banner')
@yield('content')
@include('layout.footer')
<script src="{{ asset('script/jquery.js') }}"></script>
<script src="{{ asset('script/popper.min.js') }}"></script>
<script src="{{ asset('script/bootstrap.min.js') }}"></script>
<script src="{{ asset('script/slick.slider.min.js') }}"></script>
<script src="{{ asset('script/progressbar.js') }}"></script>
<script src="{{ asset('script/fancybox.min.js') }}"></script>
<script src="{{ asset('script/jquery.countdown.min.js') }}"></script>

<script src="{{ asset('script/jquery.jplayer.js') }}"></script>
<script src="{{ asset('script/jplayer.playlist.js') }}"></script>
<script src="{{ asset('script/functions.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</body>
</html>
