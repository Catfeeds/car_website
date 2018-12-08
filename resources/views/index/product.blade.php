@extends('layouts.app')
@section('content')
<style>
        /*body {*/
            /*background: #eee;*/
            /*font-family: Helvetica Neue, Helvetica, Arial, sans-serif;*/
            /*font-size: 14px;*/
            /*color:#000;*/
            /*margin: 0;*/
            /*padding: 0;*/
        /*}*/
        .left{
            float: left;
        }
        .right{
            float: right;
        }
        .clear{
            clear: both;
        }
        .swiper-container {
            width: 500px;
            height: 300px;
            margin: 20px auto;
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
        .swiper-container{
            width: 100%;
            height: 100%;

        }
        .swiper-container img{
            width: 100%;
            height: 100%;
        }
        .row{
            position: relative;
        }
        .box{
            width: 40%;
            height: 250px;
            margin: 20px auto;
        }
        .box_1{
            width: 34rem;
            height: 300px;
            margin: 20px 70px 0;
        }
        .img_1{
            width: 100%;
            height: 100%;
        }
        .xiangqing{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            line-clamp: 5;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            
        }
        .name{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .bottom{
            position: absolute;
            bottom: 20px;
        }
        .pos{
            position: absolute;
            bottom: 20px;
            right: 100px;
        }
    </style>
<!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="{{route('home')}}"> 首页 </a> /  商品 </h4>
                    <h3>分公司商品</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- End: Header Section
==================================================-->


    <!-- Start : Blog Page Content  
==================================================-->
    <div class="blog_container single_blog_page" style="padding-bottom: 100px;">
        <div class="container">
            @foreach($goods as $good)
            <div class="row">
                <div class="box left">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide"><img class="img_1" src="{{env('APP_URL').'/uploads/'.$good->image}}" alt=""></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

                <div class="left box_1">
                    <h4 class="name">{{$good->name}}</h4>
                    <p class="xiangqing">商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍商品介绍</p>
                    <p class="bottom">参考价格：<span style="color: red;">{{$good->price}}</span></p>
                    <p class="pos"><a href="{{route('product_info',['goods_id'=>$good->id])}}" style="color: red;">查看具体详情</a></p>
                </div>
                <div class="clear"></div>
            </div>
            @endforeach
        </div>
        <!-- Container /- -->
    </div>
    <!-- End : Blog Page Content 
==================================================-->
@stop
@section('afterJavaScript')
<script>
    // var swiper = new Swiper('.swiper-container', {
    //     pagination: '.swiper-pagination',
    //     paginationClickable: true,
    //     autoplay : 3000,
    //     speed:300,
    //     autoplayDisableOnInteraction : false,
    // });
</script>
@stop