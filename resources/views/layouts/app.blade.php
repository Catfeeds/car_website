<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">


<head>
    <!-- TITLE OF SITE -->
    <title>恒成东兴官网</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="klinarmen - Cleaning HTML Template" />
    <meta name="keywords" content="klinarmen, Cleaning, one page, multipage, responsive, template" />
    <meta name="author" content="klinarmen">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{asset('index/images/favicon.png')}}">

    <!-- CSS Begins
================================================== -->
    <!--Animate Effect-->
    <link href="{{asset('index/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('index/css/hover.css')}}" rel="stylesheet">

    <!--Owl Carousel -->
    <link href="{{asset('index/css/owl.carousel.css')}}" rel="stylesheet">

    <!-- For Image Preview -->
    <link rel="stylesheet" href="{{asset('index/css/magnific-popup.css')}}">

    <!--BootStrap -->
    <link href="{{asset('index/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('index/css/normalize.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('index/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('index/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('index/css/swiper.min.css')}}">
</head>
<body>

    @include('layouts._header')
    @yield('content')
    @include('layouts._footer')
    <!-- Scripts
========================================-->
    <!-- jquery -->
    <script src="{{asset('index/js/jquery-1.12.4.min.js')}}"></script>
    <!-- plugins -->
    <script src="{{asset('index/js/plugins.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('index/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('index/js/swiper.min.js')}}"></script> 
    <script src="{{asset('index/js/main.js')}}"></script>

    @yield('afterJavaScript')
</body>
<!--  /Body -->
</html>