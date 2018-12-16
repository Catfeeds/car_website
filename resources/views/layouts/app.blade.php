<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">


<head>
    <!-- TITLE OF SITE -->
    <title>呈瑞峰集团</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="klinarmen - Cleaning HTML Template" />
    <meta name="keywords" content="klinarmen, Cleaning, one page, multipage, responsive, template" />
    <meta name="author" content="klinarmen">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/x-icon" href="{{asset('index/images/logo.png')}}" />
    <!-- Favicons -->
    

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
  <style>
    .left{
    	float:left;
    }
  </style>
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
	<script>
    $(function(){
            //获取浏览器宽度
            var _width = $(window).width();
            if(_width < 768){
                //直接为该div添加w1024样式,会覆盖前一个样式
                $(".callme").addClass("w768");
                $(".carshop").removeClass("w1024_1").addClass("w768_1");
                // //修改该div的class属性值为w1024
                // $(".w").attr("class","w1024");
                $(".pic").addClass("pos_1");
             	 $(".call").addClass("phone_1");
                $("#nav").removeClass("heig");
                $(".carshop").hover(
                    function () {
                        $(this).addClass("carshop_2");
                    },
                    function () {
                        $(this).removeClass("carshop_2");
                    }
                );
            }
            else {
                //移除该div原本的样式，并添加w1024这个样式
                $(".callme").removeClass("w768").addClass("w1024");
                $(".carshop").removeClass("w768_1").addClass("w1024_1");
                $(".pic").removeClass("pos_1").addClass("pos");
               	$(".call").addClass("phone").removeClass("phone_1");
                $("#nav").addClass("heig");
                $(".carshop").hover(
                    function () {
                        $(this).addClass("carshop_1");
                    },
                    function () {
                        $(this).removeClass("carshop_1");
                    }
                );

            }
        });
          $(window).scroll(function () {
              var $scroll = $(document).scrollTop();
              if ($scroll < 370){
                  $(".callme").addClass("dis");
              }else {
                  $(".callme").removeClass("dis");
              }
          });
          $(window).scroll(function () {
              var $scroll = $(document).scrollTop();
              if ($scroll < 370){
                  $(".carshop").addClass("dis");
              }else {
                  $(".carshop").removeClass("dis");
              }
          });
 	</script>
    @yield('afterJavaScript')
</body>
<!--  /Body -->
</html>