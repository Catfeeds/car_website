@extends('layouts.app')
@section('content')
<style type="text/css">
	<style>
        .jieshao{
            margin: 0 auto;
            width: 70%;
        }
        .jieshao img{
            margin: 0 auto;
        }
        .jieshao_1{
            margin: 20px auto;
            font-size: 18px;
        }

         .left{
             float: left;
         }
        .right{
            float: right;
        }
        .clear{
            clear: both;
        }
        .name{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
        .dizhi{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        /*.ind{*/
            /*overflow: hidden;*/
            /*text-overflow: ellipsis;*/
            /*display: -webkit-box;*/
            /*-webkit-line-clamp: 2;*/
            /*-webkit-box-orient: vertical;*/
        /*}*/

        body {
            background: #eee;
            font-size: 14px;
            color:#000;
            margin: 0;
            padding: 0;
        }
        .swiper-container {
            width: 100%;
            height: 100%;

        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        .box{
            width: 100%;
            height: 40rem;
        }
        .box img{
            width: 100%;
            height: 100%;
        }
    </style>
</style>
	<div class="slides_wrapper">
        
        <div class="box">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{asset('index/images/slider1.jpg')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('index/images/slider2.jpg')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('index/images/slider3.jpg')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('index/images/service1.jpg')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('index/images/service2.jpg')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('index/images/service3.jpg')}}" alt=""></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

    </div>


    <section class="service_list_section">
        <div class="container">
            <div class="base_header_2">
                <h3>公司简介</h3>
            </div>
            <div class="row">
                <div class="jieshao">
                    <p class="jieshao_1">jieshaojieshaojieshaojieshao jieshao jieshao jieshao jieshao  </p>
                    <img alt="team" class="img-responsive" src="images/service4.jpg">
                </div>
            </div>
            <!--End: row-->
        </div>
        <!-- End: container-->
    </section>


    <section class="work-section">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base_header_2">
                <h3>分公司介绍</h3>
            </div>
            <!-- End:  heading -->
            <div class="row">
                <div class="owl-carousel owl-theme col-md-12" id="servic">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="images/service1.jpg">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5 class="name">名字</h5></a>
                            <p class="dizhi">地址</p>
                            <p>tell：12345678910</p>
                            <p class="right"><a href="single-blog.html">商品介绍</a></p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--/Item -->
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="images/service2.jpg">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5 class="name">名字</h5></a>
                            <p class="dizhi">地址</p>
                            <p>tell：12345678910</p>
                            <p class="right"><a href="single-blog.html">商品介绍</a></p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--/Item -->
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="images/service3.jpg">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5 class="name">名字</h5></a>
                            <p class="dizhi">地址</p>
                            <p>tell：12345678910</p>
                            <p class="right"><a href="single-blog.html">商品介绍</a></p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="{{asset('index/images/service4.jpg')}}">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5 class="name">名字</h5></a>
                            <p class="dizhi">地址</p>
                            <p>tell：12345678910</p>
                            <p class="right"><a href="single-blog.html">商品介绍</a></p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--/Item -->
                    <!-- End : Tab pane 1 -->
                </div>
            </div>
        </div>
    </section>
    <!-- End: Work Section 
==================================================-->
 


 
 <!-- End: Team Section 
==================================================-->
    <section class="service_list_section">
        <div class="container">
            <div class="base_header_2">
                <h3>公司人员</h3>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme col-md-12" id="servic_1">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="{{asset('index/images/service1.jpg')}}">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5>名字</h5></a>
                            <p class="ind">介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--/Item -->
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="{{asset('index/images/service2.jpg')}}">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5>名字</h5></a>
                            <p>介绍</p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--/Item -->
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="{{asset('index/images/service3.jpg')}}">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5>名字</h5></a>
                            <p>介绍</p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="{{asset('index/images/service4.jpg')}}">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5>名字</h5></a>
                            <p>介绍</p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--/Item -->
                    <!-- End : Tab pane 1 -->
                </div>
            </div>
            <!--End: row-->
        </div>
        <!-- End: container-->
    </section>

    <!-- Start: Team Section 
==================================================-->


    <!-- Start: Pricing Section 
==================================================-->
    <section class="work-section">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base_header_2">
                <h3>办公场所</h3>
            </div>
            <!-- End:  heading -->
            <div class="row">
                <div class="owl-carousel owl-theme col-md-12" id="servic_2">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="images/service1.jpg">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5 class="name">名字</h5></a>
                            <p class="dizhi">介绍</p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--/Item -->
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="images/service2.jpg">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5 class="name">名字</h5></a>
                            <p class="dizhi">介绍</p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--/Item -->
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="images/service3.jpg">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5 class="name">名字</h5></a>
                            <p class="dizhi">介绍</p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive" src="images/service4.jpg">
                        </div>
                        <div class="service_para">
                            <a href="services.html"><h5 class="name">名字</h5></a>
                            <p class="dizhi">介绍</p>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--/Item -->
                    <!-- End : Tab pane 1 -->
                </div>
            </div>
        </div>
    </section>

@stop

@section('afterJavaScript')
	<script>
        $("#servic_1").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 5 seconds
            autoplay: false,
            smartSpeed: 2000, // Default is 250
            items: 3,
            loop: true,
            margin: 30,
            touchDrag: true,
            mouseDrag: true,
            pagination: false,
            dots: true,
            nav: false,
            navText: ["<i class='logo-nav-icon'></i>", "<i class='logo-nav-icon'></i>"],
            responsive: {
                1200: {
                    items: 3
                },
                992: {
                    items: 3
                },
                768: {
                    items: 2
                },
                480: {
                    items: 2
                },
                320: {
                    items: 1
                },
                280: {
                    items: 1
                }
            }
        });
        $("#servic_2").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 5 seconds
            autoplay: false,
            smartSpeed: 2000, // Default is 250
            items: 3,
            loop: true,
            margin: 30,
            touchDrag: true,
            mouseDrag: true,
            pagination: false,
            dots: true,
            nav: false,
            navText: ["<i class='logo-nav-icon'></i>", "<i class='logo-nav-icon'></i>"],
            responsive: {
                1200: {
                    items: 3
                },
                992: {
                    items: 3
                },
                768: {
                    items: 2
                },
                480: {
                    items: 2
                },
                320: {
                    items: 1
                },
                280: {
                    items: 1
                }
            }
        });
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: 2500,
            autoplayDisableOnInteraction: false
        });
    </script>
@stop 