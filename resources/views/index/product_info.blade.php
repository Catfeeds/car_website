@extends('layouts.app')
@section('content')
<style>
        .left{
            float: left;
        }
        .right{
            float: right;
        }
        .clear{
            clear: both;
        }
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
            padding: 0 20px;
        }
        html, body {
            position: relative;
            /*height: 100%;*/
        }
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
            margin: 10px 50px;
        }
        .box .swiper-container img{
            width: 100%;
        }
        .jiage{
            margin: 2.30em 0;
        }
        .juti{
            font-size: 18px;
            text-indent:2em;
        }
    </style>
<!-- header -->
<header id="page-top" class="blog-banner">
    <!-- Start: Header Content -->
    <div class="container" id="blog">
        <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-sm-12">
                <!-- Headline Goes Here -->
                <h4><a href="index.html"> 首页 </a> / 详情 </h4>
                <h3>具体详情</h3>
            </div>
        </div>
        <!-- End: .row -->
    </div>
    <!-- End: Header Content -->
</header>
<!--/. header -->

<!-- End: Header Section
==================================================-->

<!-- Start: Service Section
==================================================-->
<section class="service_list_section">
    <div class="container">
        <div class="box">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="img_1" src="images/service1.jpg" alt=""></div>
                    <div class="swiper-slide"><img class="img_1" src="images/service1.jpg" alt=""></div>
                    <div class="swiper-slide"><img class="img_1" src="images/service1.jpg" alt=""></div>
                    <div class="swiper-slide"><img class="img_1" src="images/service1.jpg" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div>
                <h5 class="left">宝马5系</h5>
                <p class="right jiage" style="color: red;">15万~17万</p>
                <div class="clear"></div>
                <p class="juti">具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情具体详情</p>
            </div>
        </div>
    </div>
    <!-- End: container-->
</section>
<!-- End: Service Section


@stop