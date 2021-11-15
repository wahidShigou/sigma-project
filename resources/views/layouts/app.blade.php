<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Sigma project</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('myCss')

</head>

<body>

@include('layouts.loader')

@include('layouts.header')

@yield('content')

@include('layouts.footer')


<!-- Javascript Files -->
<script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/vendor/isotop.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/barfiller.js') }}"></script>
<script src="{{ asset('assets/js/vendor/countdown.js') }}"></script>
<script src="{{ asset('assets/js/vendor/easing.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

@yield('myJs')
</body>

</html>
